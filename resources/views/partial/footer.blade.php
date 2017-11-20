<div class="footer">
    <div class="footer_links_container text-center">
        <table style="max-height: 215px">
            <tr>
                <td>
                    <img src="{{asset("images/logo.png")}}" class="img-responsive logo">
                </td>
                <td>
                    <a href="{{URL::to($locale . '/about')}}">ABOUT US</a><br>
                    <span>FOLLOW US</span><br>
                    <div>
                        <a href="#"><img id="social_media_logo" src="{{asset('images/FB.png')}}"></a>
                        <a href="#"><img id="social_media_logo" src="{{asset('images/Insta.png')}}"></a>
                        <a href="#"><img id="social_media_logo" src="{{asset('images/Youtube.png')}}"></a>
                    </div>
                    <div style="margin-top: -5px;"><a href="{{URL::to($locale . '/tnc')}}">TERMS & CONDITIONS</a></div>
                </td>
            </tr>
        </table>
    </div>
</div>