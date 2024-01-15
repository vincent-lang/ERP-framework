<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Conversation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function counter()
    {
        $data_klanten = Contact::all()->where('company', 'no');
        $klanten = count($data_klanten);
        $data_bedrijven = Contact::all()->where('company', 'yes');
        $bedrijven = count($data_bedrijven);
        return view('dashboard', compact('klanten', 'bedrijven'));
    }

    public function klantenList()
    {
        return view('klanten.list', ['data' => Contact::all()->where('company', 'no'), 'user' => User::all()]);
    }

    public function contactList()
    {
        return view('contacts.list', ['data' => Contact::all()->where('company', 'yes')]);
    }
    public function conversationList()
    {
        return view('Conversation.list', ['data' => Conversation::all()]);
    }

    public function addList(Contact $info)
    {
        return view('addList.add', ['data' => Contact::all()->where('company', 'no')->where('company_id', null), 'company' => $info]);
    }

    public function add(Contact $info, Contact $company)
    {
        Contact::where('id', $info->id)->update(['company_id' => $company->id]);

        return redirect(route('dashboard'));
    }

    public function conversation(Contact $info)
    {
        return view('klanten.conversation', compact('info'));
    }

    public function klantGegevens(Contact $info)
    {
        $conversation_data = Conversation::all()->where('klant_id', $info->id);

        return view('klantGegevens.gegevens', compact('info', 'conversation_data'));
    }

    public function index()
    {
        return view('contacts.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'nullable',
            'company_name' => 'nullable',
            'KVK_number' => 'nullable',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'street' => 'nullable',
            'house_number' => 'nullable',
            'zipcode' => 'nullable',
            'location' => 'nullable',
            'email' => 'nullable',
            'phone_number' => 'nullable',
            'function' => 'nullable'
        ]);

        Contact::create($validated);

        return redirect(route('dashboard'));
    }

    public function klantenEdit(Contact $info)
    {
        return view('klanten.edit', compact('info'));
    }

    public function klantenUpdate(Request $request, Contact $info)
    {
        $validated = $request->validate([
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'street' => 'nullable',
            'house_number' => 'nullable',
            'zipcode' => 'nullable',
            'location' => 'nullable',
            'email' => 'nullable',
            'phone_number' => 'nullable',
            'function' => 'nullable'
        ]);

        DB::table('contacts')->where('id', $info->id)->update($validated);

        return redirect(route('contact.klantenList'));
    }

    public function contactEdit(Contact $info)
    {
        return view('contacts.edit', compact('info'));
    }

    public function contactUpdate(Request $request, Contact $info)
    {
        $validated = $request->validate([
            'company_name' => 'nullable',
            'KVK_number' => 'nullable'
        ]);

        DB::table('contacts')->where('id', $info->id)->update($validated);

        return redirect(route('contact.contactsList'));
    }

    public function delete(Contact $info)
    {
        Contact::where('company_id', $info->id)->update(['company_id' => null]);

        $info->delete();

        return redirect(route('contact.contactsList'));
    }

    public function conversationStore(Contact $info, Request $request)
    {
        $validated = $request->validate([
            'conversation_date' => 'required',
            'conversation_time' => 'required',
            'talked_with' => 'required',
            'notes_conversation' => 'required'
        ]);

        Conversation::create($validated);

        Conversation::where('talked_with', $request->talked_with)->where('conversation_date', $request->conversation_date)->where('conversation_time', $request->conversation_time)->update(['klant_id' => $info->id]);

        return redirect(route('contact.klantenList'));
    }

    public function conversationEdit(Conversation $info)
    {
        return view('klanten.conversationEdit', compact('info'));
    }

    public function conversationUpdate(Request $request, Conversation $info)
    {
        $validated = $request->validate([
            'conversation_date' => 'required',
            'conversation_time' => 'required',
            'talked_with' => 'required',
            'notes_conversation' => 'required'
        ]);

        DB::table('conversations')->where('id', $info->id)->update($validated);

        return redirect(route('contact.conversationList'));
    }
}
