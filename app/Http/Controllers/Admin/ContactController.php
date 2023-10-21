<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactPageRequest;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function contact_page()
    {
        $contactPage = ContactPage::first();
        if (!$contactPage) {
            $contactPage = ContactPage::create(contactPageInputs());
        }
        return view("admin.pages.contact", ['contactPage' => $contactPage]);
    }
    public function contact_page_store(ContactPageRequest $request)
    {
        $contactPage = ContactPage::first();
        if ($contactPage) {
            $contactPage->update(array_merge($request->validated(), ['config_password' => Hash::make($request->input('config_password'))]));
        }
        return view("admin.pages.contact", ['contactPage' => $contactPage]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
