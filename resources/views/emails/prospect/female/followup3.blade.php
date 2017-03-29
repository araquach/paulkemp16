{{-- New prospect female 3 --}}


@extends('emails.prospect.template.2column')

@section('background_colour')
    #dce1e9
@stop

@section('optional')
    
@stop
    
<!--Image 1200px x 400px-->
@section('hero_image')
   http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/email_header.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">Hi {{ $first_name }},</span>
    <br><br>
    <strong>Thanks for applying for your FREE products,</strong>
    we've selected a range that's ideal for your hair texture and condition. We'll let you know when they're on the way to you.
@stop

@section('section2')
    As you've never been to Jakata before we'd love you to experience the salon for yourself. We have a team of ten talented, friendly staff ready to look after you. 
    We've won numerous hairdressing awards and you only have to look at our customer testimonials and Facebook reviews to see how highly rated we are.
    <br><br>
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
    <strong>I'm sure once you've experienced Jakata you won't want to go anywhere else!</strong>
@stop

<!--Image 200px wide-->
@section('image2')
    http://placehold.it/200
@stop

@section('section3')
    Matt Lane
@stop

<!--Image 200px wide-->
@section('image3')
    http://placehold.it/200
@stop

@section('section4')
    Laura Minnett
@stop

<!--bottom panel text-->
@section('section5')
    Thanks again and we look forward to seeing you soon!
    <br><br>
    <span style="font-size: 20px;">The JAKATA team</span>
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#3f4960
@stop

