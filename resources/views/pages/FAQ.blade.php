@extends('layouts.app')
 @section('content')

<body style="padding:200px" ;>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.faq_question').click(function() {

                if ($(this).parent().is('.open')) {
                    $(this).closest('.faq').find('.faq_answer_container').animate({
                        'height': '0'
                    }, 500);
                    $(this).closest('.faq').removeClass('open');

                } else {
                    var newHeight = $(this).closest('.faq').find('.faq_answer').height() + 'px';
                    $(this).closest('.faq').find('.faq_answer_container').animate({
                        'height': newHeight
                    }, 500);
                    $(this).closest('.faq').addClass('open');
                }

            });

        });
    </script>
    <style>
        /*FAQS*/
        .faq_question {
            margin: 0px;
            padding: 0px 0px 5px 0px;
            display: inline-block;
            cursor: pointer;
            font-weight: bold;
        }

        .faq_answer_container {
            height: 0px;
            overflow: hidden;
            padding: 0px;
        }
    </style>
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact Us</h3>
                </div>
                <div class="panel-body">

                    <div class="faq">
                        <div class="faq_question">What is the purpose of National Cyber Crime Reporting Portal?</div>
                        <div class="faq_answer_container">
                            <div class="faq_answer">
                                This portal is an initiative of Government of India to facilitate victims/
                                complainants to report cyber crime complaints online. This portal caters
                                to complaints pertaining to online Child Pornography (CP), Child Sexual
                                Abuse Material (CSAM) or sexually explicit content such as Rape/Gang Rape
                                (CP/RGR) content and other cybercrimes such as mobile crimes, online and
                                social media crimes, online financial frauds, ransomware, hacking, cryptocurrency
                                crimes and online cyber trafficking.
                            </div>
                        </div>
                        <div class="faq_question">What is CSAM?</div>
                        <div class="faq_answer_container">
                            <div class="faq_answer">
                                <p>Child Sexually Abusive Material (CSAM) refers to material containing sexual image in any form,
                                    of a child who is abused or sexually exploited. Section 67 (B) of IT Act states that “it is
                                    punishable for publishing or transmitting of material depicting children in sexually explicit
                                    act, etc. in electronic form”.
                                </p>
                            </div>
                        </div>

                        <div class="faq_question">Apart from this portal, are there any alternative ways to remove objectionable
                            content from social media websites?
                        </div>
                        <div class="faq_answer_container">
                            <div class="faq_answer">
                                Yes, most of the social media website like Facebook, YouTube, Twitter and Instagram etc. have the
                                option of reporting or flagging the objectionable contents. The social media platforms may take
                                appropriate action based on the contents reported to them as per their content policy.
                            </div>
                        </div>

                        <div class="faq_question">Which type of cybercrimes I can report on the portal?</div>
                        <div class="faq_answer_container">
                            <div class="faq_answer">
                                <p>There are two options for reporting cybercrimes on the portal:</p>
                                <p>Report Crime related to Women/ Child – Under this section, you
                                    can report complaints pertaining to online Child Pornography
                                    (CP), Child Sexual Abuse Material (CSAM) or sexually explicit
                                    content such as Rape/Gang Rape (CP/RGR) content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection()