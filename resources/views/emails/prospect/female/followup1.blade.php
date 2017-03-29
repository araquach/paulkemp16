{{-- New prospect female 1 --}}

@extends('emails.prospect.template.large_2image')

@section('background_colour')
    #dce1e9
@stop

@section('optional')
    
@stop
    
<!--Image 600px x 300px-->
@section('hero_image')
   http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/email_header.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">@if(App::isLocal())
                                        Hi Adam, 
                                    @else 
                                        Hi {{ $prospect->first_name }}, 
                                    @endif</span>
    <br><br>
    <strong>Thanks for applying for your FREE products</strong>
    <br><br>
    we've selected a range that's ideal for your hair texture and condition. We'll let you know when they're on the way to you.
@stop

<!--Image 200px wide-->
@section('image_left')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/man_pic.jpg
@stop

<!--Image 200px wide-->
@section('image_right')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/men_products.jpg
@stop

@section('section2')
    <strong>As you've never been to Jakata before we'd love you to experience the salon for yourself.</strong> 
    <br><br>We have a team of ten talented, friendly staff ready to look after you.
    We've won numerous hairdressing awards and you only have to look at our customer testimonials and Facebook reviews to see how highly rated we are.
    <br><br>
    <a href="https://www.facebook.com/JakataSalon/">Jakata Facebook page</a>
@stop

@section('section3')
    Based on the information you gave, we think @if(App::isLocal())
                                        {!! getStylists($prospect->cut_price, $prospect->colour_price, $prospect->gender) !!}, 
                                    @else 
                                        {!! getStylists($cut_price, $colour_price, $gender) !!}, 
                                    @endif 
    would be great stylists for you to try. 
    We're sending out a voucher along with your products so you can  experience a FREE Blow Dry and @if(App::isLocal())
                                        {!! getTreatment($prospect->texture, $prospect->colour_price, $prospect->gender) !!}, 
                                    @else 
                                        {!! getTreatment($cut_price, $colour_price, $gender) !!}, 
                                    @endif treatment with either of them. 
    <br><br>
    <strong>I'm sure once you've experienced Jakata you won't want to go anywhere else!</strong>
@stop

@section('section4')
    Thanks again and we look forward to seeing you soon!
    <br><br>
    <span style="font-size: 20px;">The JAKATA team</span>
@stop


@section('footer_colour')
    color: #999999;" bgcolor="#3f4960
@stop

