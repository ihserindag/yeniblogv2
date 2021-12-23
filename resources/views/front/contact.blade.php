<x-front.layout.master>

<main>



    <div class="container">
        <div class="row">

            <!-- Details informations -->
            <div class="col-xs-12">
                <section class="contact two-column-inside white-box">
                    <div class="contact-me">
                        <h2>İletişim Bilgileri</h2>

                        @foreach ($contacts as $contact)
                        <ul>

                            <li>
                                <i class="pe-7s-mail"></i>
                                <div class="contact-me-right">
                                    <p>{{ $contact->email }}</p>
                                    <span class="contact-me-right-desc">email</span>
                                </div>
                            </li>
                            <li>
                                <i class="pe-7s-call"></i>
                                <div class="contact-me-right">
                                    <p>{{ $contact->telephone }}</p>
                                    <span class="contact-me-right-desc">phone</span>
                                </div>
                            </li>
                            <li>
                                <i class="pe-7s-map-marker"></i>
                                <div class="contact-me-right">
                                    <p>{{$contact->adress}}</p>
                                    <span class="contact-me-right-desc">address</span>
                                </div>
                            </li>
                        </ul>
                        @endforeach


                    </div>
                    <div class="get-in-touch">
                        <h2>İstek Şikayet</h2>
                        <p class="font-primary">Bize Buradan Ulaşabilirsiniz.</p>
                        <form action="#">
                            <input class="col-xs-12 form-control" type="text" placeholder="Ad Soyad" name="name">
                            <input class="col-xs-12 form-control" type="email" placeholder="Email" name="email">
                            <textarea class=" col-xs-12 form-control" id="" rows="6" placeholder="Mesaj" name="question"></textarea>
                            <button type="submit" class="btn"><i class="pe-7s-paper-plane"></i> Gönder</button>
                        </form>
                    </div>
                </section>
            </div>



            <!-- Google Map -->
            <div class="col-xs-12">
                <section class="white-box contact-map">
                    <div id="contact-map-inside" >
                        {!! $contact->map !!}
                    </div>
                </section>
            </div>

        </div>
    </div>
    </main>


</x-front.layout.master>
