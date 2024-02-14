<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email','tel', 'address', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->categorySearch($request->category_id)->keywordSearch($request->keyword)->get();
        $categories = Category::simplePagenate(7);

        return view('admin', compact('contacts', 'categories'));
    }
}
