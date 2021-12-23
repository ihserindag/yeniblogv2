<x-front.layout.master>


<main>
    <div class="container">
        <div class="row">

            <!-- General informations -->
            <div class="col-xs-12">
                <section class="general-info white-box">
                    <div class="author">
                        <img src="{{ asset('front') }}/img/profile-picture.png" alt="" data-rjs="2">
                        <ul class="author-nav">
                            <li><a href="#" title=""><i class="pe-7s-bookmarks"></i> Download my CV</a></li>
                            <li><a href="#" title=""><i class="pe-7s-paper-plane"></i> Write message</a></li>
                        </ul>
                    </div>
                    <div class="general-info-right">
                       @foreach ($abouts as $about)
                       {!!$about->description !!}

                       @endforeach



                        <img src="img/signature.jpg" alt="" title="Author Signature" data-rjs="2">
                    </div>
                </section>
            </div>



            <!-- Counters -->
            <div class="col-xs-12">
                <section class="counters white-box">
                    <div class="counters-one">
                        <span class="counters-one-icon"><i class="pe-7s-cart"></i></span>
                        <h2>2540</h2>
                        <p>Product sales</p>
                    </div>
                    <div class="counters-one">
                        <span class="counters-one-icon"><i class="pe-7s-news-paper"></i></span>
                        <h2>400</h2>
                        <p>Line of Code</p>
                    </div>
                    <div class="counters-one">
                        <span class="counters-one-icon"><i class="pe-7s-photo"></i></span>
                        <h2>8613</h2>
                        <p>Taking photos</p>
                    </div>
                    <div class="counters-one">
                        <span class="counters-one-icon"><i class="pe-7s-tools"></i></span>
                        <h2>1024</h2>
                        <p>Bug fixed</p>
                    </div>
                </section>
            </div>

        </div>
    </div>
    </main>
</x-front.layout.master>
