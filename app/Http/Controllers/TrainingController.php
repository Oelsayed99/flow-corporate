<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingRequest;

class TrainingController extends Controller
{
    public function index()
    {
        return view('pages.training');
    }

    public function store(TrainingRequest $request)
    {
        // For now, no mail/db logic required beyond validation.
        return redirect()->back()->with('success', __('messages.training_success') ?? 'Application submitted successfully. We will contact you soon.');
    }
}
