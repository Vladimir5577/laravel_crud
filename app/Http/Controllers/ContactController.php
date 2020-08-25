<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller {
    
	public function submit(ContactRequest $request) {
		$contact = new Contact();
		$contact->name = $request->name;
		$contact->country = $request->country;

		$contact->save();

		return redirect()->route('home')->with('success', 'Record added successfully');

	}

	public function database() {
		$contact = new Contact;

		$data = Contact::all();

		return view('database', ['data' => $data]);
	}

	public function detail($id) {
		$data = Contact::find($id);
		return view('detail', ['data' => $data]);
	}

	public function edit($id) {
		$contact = new Contact;
		$data = Contact::find($id);
		return view('edit', ['data' => $data]);
	}

	public function update_record($id, ContactRequest $request) {
		$contact = new Contact();
		$data = Contact::find($id);

		$data->name = $request->name;
		$data->country = $request->country;

		$data->save();

		return redirect()->route('database')->with('success', 'Record updated successfully');
	}

	public function delete($id) {
		$contact = new Contact();

		$data = Contact::find($id)->delete();

		return redirect()->route('database')->with('success', 'Record deleted successfully');
	}



}
