let controller = document.querySelector('input.check');
let button = document.querySelector('input.button');

let company_name = document.querySelector('div.company_name');
let kvk_number = document.querySelector('div.kvk_number');
let firstname = document.querySelector('div.firstname');
let lastname = document.querySelector('div.lastname');
let street = document.querySelector('div.street');
let house_number = document.querySelector('div.house_number');
let zipcode = document.querySelector('div.zipcode');
let Location = document.querySelector('div.location');
let email = document.querySelector('div.email');
let phone_number = document.querySelector('div.phone_number');
let Function = document.querySelector('div.function');

setInterval(() => {
    if (controller.value == 'yes') {
        company_name.style.display = 'block';
        kvk_number.style.display = 'block';

        firstname.style.display = 'none';
        lastname.style.display = 'none';
        street.style.display = 'none';
        house_number.style.display = 'none';
        zipcode.style.display = 'none';
        Location.style.display = 'none';
        email.style.display = 'none';
        phone_number.style.display = 'none';
        Function.style.display = 'none';
    } else if (controller.value == 'no') {
        company_name.style.display = 'none';
        kvk_number.style.display = 'none';

        firstname.style.display = 'block';
        lastname.style.display = 'block';
        street.style.display = 'block';
        house_number.style.display = 'block';
        zipcode.style.display = 'block';
        Location.style.display = 'block';
        email.style.display = 'block';
        phone_number.style.display = 'block';
        Function.style.display = 'block';
    } else {
        company_name.style.display = 'none';
        kvk_number.style.display = 'none';
        firstname.style.display = 'none';
        lastname.style.display = 'none';
        street.style.display = 'none';
        house_number.style.display = 'none';
        zipcode.style.display = 'none';
        Location.style.display = 'none';
        email.style.display = 'none';
        phone_number.style.display = 'none';
        Function.style.display = 'none';
    }

    if (controller.value == 'yes' || controller.value == 'no') {
        button.style.display = 'block';
    } else {
        button.style.display = 'none';
    }
}, 1000);
