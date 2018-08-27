@extends('layouts.template')
@section('content')
    <div class="faqtop">

    </div>
    
    <section id="faqfield">
        <div class="cudast">
            <br/> <h3 class="tittle-w3ls text-center mb-3">Frequently Asked Questions</h3><br/>
            <div class="">
                <p>
                <button class="btn btn-light tiki" type="button" data-toggle="collapse" data-target="#errandquestion" aria-expanded="false" aria-controls="errandquestion">
                How does Errandpro work?
                </button>
                </p>
                <div class="collapse" id="errandquestion">
                    <div class="card card-body">
                        1. Download our App from the Google Playstore. <br/>
                        2. Register your profile and login to our platform<br/>
                        3. Select an errand you want us to run on your behalf<br/>
                        4. Choose your preferred location, time and date preference.<br/>
                        5. Our errand professional will get to your location as fast as possible to run your errands.<br/>
                        6. Spend your time on more productive endeavours
                    </div>
                </div>
            </div><br/>
            <div class="darker">
                <p>
                <button class="btn btn-light darker tiki" type="button" data-toggle="collapse" data-target="#errandquestion2" aria-expanded="false" aria-controls="errandquestion">
                    How is your pricing?
                </button>
                </p>
                <div class="collapse" id="errandquestion2">
                    <div class="card card-body darker">
                        We run our pricing based on kilometers. This simply implies price charged is a function of how many kilometers is covered to complete the task of delivering an errand for you.
                    </div>
                </div>
            </div><br/>
            <div class="">
                <p>
                <button class="btn btn-light tiki" type="button" data-toggle="collapse" data-target="#errandquestion3" aria-expanded="false" aria-controls="errandquestion">
                    How will I know how much to pay?
                </button>
                </p>
                <div class="collapse" id="errandquestion3">
                    <div class="card card-body">
                        The total cost is calculated and automatically generated for you before checking out.
                    </div>
                </div>
            </div><br/>
            <div class="darker">
                <p>
                <button class="btn btn-light darker tiki" type="button" data-toggle="collapse" data-target="#errandquestion4" aria-expanded="false" aria-controls="errandquestion">
                    What is you coverage?
                </button>
                </p>
                <div class="collapse" id="errandquestion4">
                    <div class="card card-body darker">
                        We currently provide services on the mainlain in Lagos State.
                    </div>
                </div>
            </div><br/>
            <div class="">
                <p>
                <button class="btn btn-light tiki" type="button" data-toggle="collapse" data-target="#errandquestion5" aria-expanded="false" aria-controls="errandquestion">
                    How do I pay?
                </button>
                </p>
                <div class="collapse" id="errandquestion5">
                    <div class="card card-body">
                        All payments are processed electronically by card through our payment partners paystack.
                    </div>
                </div>
            </div><br/>
            <div class="darker">
                <p>
                <button class="btn btn-light darker tiki" type="button" data-toggle="collapse" data-target="#errandquestion6" aria-expanded="false" aria-controls="errandquestion">
                    Are there any risk involved in using your service?
                </button>
                </p>
                <div class="collapse" id="errandquestion6">
                    <div class="card card-body darker">
                        Except for a natural disaster that is beyond human control, all packages or deliveries done by us are ensured against theft and damages. If any issue arises in the course of delivering an errand for you, such would be adequately investigated and you will be compensated.
                    </div>
                </div>
            </div><br/>
            <div class="">
                <p>
                <button class="btn btn-light tiki" type="button" data-toggle="collapse" data-target="#errandquestion7" aria-expanded="false" aria-controls="errandquestion">
                    How am I sure that my package is delivered?
                </button>
                </p>
                <div class="collapse" id="errandquestion7">
                    <div class="card card-body">
                    For every errand request made on our network by a sender/customer, there is a corresponding SMS sent to the receiver details of the delivery (rider, package details, and code) as well as the rider (receiver details). Once the rider verifies receiver and delivers package. He completes the transaction by imputing the code in his app. This automatically generates a SMS to the sender/customer to confirm delivery to receiver.
                    </div>
                </div>
            </div><br/>
            <div class="formcase">
                <!-- form starts here -->
                <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" class="impstyle" placeholder="Name " required="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="name" class="impstyle" placeholder="Email" required="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="name" class="impstyle" placeholder="Mobile No." required="" />
                    </div>
                </div>
                <div class="">
                 
                    <textarea name="Comments" class="impstyle txarea" placeholder="How can we help?" required=""></textarea>
                </div>
                
                <div class="subbtnd">
                    <input type="submit" class="btn btn-primary w3-button w3-indigo w3-border w3-border-white w3-round-large subbtn" value="Send message">
                </div>

                </form>
            </div>
        </section>
        
@endsection
