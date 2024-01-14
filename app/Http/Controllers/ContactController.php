<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function counter()
    {
        $data = Contact::all();
        $amount = count($data);
        return view('dashboard', compact('amount'));
    }

    public function klantenList()
    {
        return view('klanten.list', ['data' => Contact::all()->where('company', 'no')]);
    }

    public function contactList()
    {
        return view('contacts.list', ['data' => Contact::all()->where('company', 'yes')]);
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

    public function klantenUpdate(Request $request)
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

        DB::table('contacts')->update($validated);

        return redirect(route('contact.klantenList'));
    }

    public function contactEdit(Contact $info)
    {
        return view('contacts.edit', compact('info'));
    }

    public function contactUpdate(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'nullable',
            'KVK_number' => 'nullable'
        ]);

        DB::table('contacts')->update($validated);

        return redirect(route('contact.contactsList'));
    }

    public function delete(Contact $info)
    {
        $info->delete();

        return redirect(route('contact.contactsList'));
    }
}
