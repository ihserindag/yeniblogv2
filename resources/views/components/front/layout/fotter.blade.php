<!-- FOOTER -->
<footer>

    <!-- COPYRIGHT -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="copyright">
                    <ul>

                        @foreach ($socials as $social)

                        <li><a href="{{ $social->url }}" ><i class="{{ $social->icon }}"></i></a></li>
                        @endforeach


                    </ul>
                    <p class="font-primary">&copy; İbrahim Halil Serindağ</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end COPYRIHT -->
</footer>
<!-- end FOOTER -->

<x-front.layout.script/>
</body>


</html>
