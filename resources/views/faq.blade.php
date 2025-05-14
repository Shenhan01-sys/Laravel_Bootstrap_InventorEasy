@extends('layout.main')
@section('title', 'FAQ')
@section('content')
<div class="container mt-4">
    <h5>Website fact</h5>
    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="faq1">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Apa itu website? woilah cik
                    </button>
                </h2>
            </div>
            <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#faqAccordion">
                <div class="card-body">
                    Website ini merupakan situs pribadi Hans Gunawan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection