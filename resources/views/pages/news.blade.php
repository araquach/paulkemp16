@extends('layouts.main')

@section('head')
	<meta name="description" content="For all the latest JAKATA hair news">
	<meta name="keywords" content="Hair news, hairdressing news">
@stop

@section('title')
	<title>Paul Kemp Hairdressing - Hairdressing News</title>
@stop

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  new Fx.Accordion($('accordion'), '#accordion .reveal', '#accordion .hidden');
	  });
</script>

<section id="newspage">
<h2>News</h2>

<section id="accordion">

<article class="article">
<a id="articleName" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/.jpg', '') }}
<h3>Colour Masters</h3>
<p><strong>Last year was a big movement in our education department. Our focus was on putting our stylist through their paces. We have always had a strong focus on eduction and developing our team’s skill sets, but to further this we put all of our senior team members in both salons through a colour master class.</strong></p>
<p>The Schwarzkopf Professional Colour Master Class represents a gold standard in colour education with an innovative delivery method. The learning units are dedicated to all aspects of colour, from the philosophy of colour, interpretation, selection and application. The focus of this course is not only on theory of colour but also a practical hands-on experience.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/.jpg', '') }}
<p>Colour isn’t just a trend-led creative process, it’s a technical speciality which requires years of training and constant education to keep you ahead of the game and up to speed on trends, techniques and product updates. A fantastic colourist also needs to have an advanced understanding of the technical aspects of colour and the processes involved, including how best to implement those techniques for each individual client.</p>
<p>Izzy &amp; Kelly travelled to London on a regular basis throughout the year to train with Schwarzkopf’s National technical specialists. Completing a final exam at the end of the year all of our team passed with flying colours… no pun intended! Now qualified colour masters they have brought the education back to the rest of the team. We have really seen a massive step up in our teams colour knowledge.</p>
<p>Leon was recently promoted to Senior Stylist level and as part of his movement up the ranks he's completing the course over the next 12 months to bring him in line with the other senior team members.</p>
<p class="offerHeading">You can be always be confident in the knowledge that all the team here at Paul Kemp Hairdressing are trained to the highest levels in hairdressing.</p>
</section> <!--end .hidden-->
<p class="author">Published by </p>
<time datetime="2013-08-01">1<sup>st</sup> August 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="FibrePlex" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/fibreplex_p.jpg', 'Fibre Plex') }}
<h3>Sorry, your hair won’t take it…</h3>
<p><strong>Well now it will!<br>Introducing FibrePlex, a revolutionary new product just launched by Schwarzkopf professional. Proven to reduce damage from tints and bleach by up to 94% - your colour just got better!</strong></p>
<p>By sacrificing itself opposed to your hair, FibrePlex has made even complex dark to lights a no-fear service.</p>
<p>We all adore light reflecting, luxurious, satin soft hair so why lose it&hellip;<br>The cutting edge innovation of FibrePlex let’s your worries about colour damage slide away.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>FibrePlex protects and seals the all important bonds within your hair allowing you to leave the salon with the colour and condition you’ve always dreamed of.</p>
<p><iframe width="400" height="300" src="https://www.youtube.com/embed/HeN7iiDRpME" frameborder="0" class="right" allowfullscreen></iframe><p>
<p>From root tints to full head bleach highlights, FibrePlex will preserve and protect the delicate condition of your hair.</p>
<p>An extra £10 in addition to your colour service, plus a complimentary conditioning treatment means damage free hair is just a phone call away.</p>
<p>Kellie Reedy, Senior stylist here at Paul Kemp comments:
“ITS AMAZING! - It gives me and my clients the ability to be more creative!”</p>
<p>Salon stylist Natasha Bailey also got excited by FibrePlex, saying:
“I’m so in love with FibrePlex. My clients hair feels healthier than before the colour application, it's left shinier and silky smooth!”</p>
<p>For just an additional £12.50 a bond booster can be yours to take home, fortifying your hair for your next appointment and easing any concerns you have about condition.</p>
<p class="offer_heading"><strong>FibrePlex is now available in the salon for just £10 with any colour service</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Caleb</p>
<time datetime="2015-11-25">25<sup>th</sup> November 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="SeniorStylists" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/leon_shell.jpg', 'Leon Pritchard & Michelle Railton') }}
<h3>Leon &amp; Shell Promoted to Senior Stylists</h3>
<p><strong>We’re proud to announce that two PK hairstylists have been promoted to Senior Stylist level. Leon Pritchard &amp; Michelle Railton have both met the standards required to be given this sought after title.</strong></p>
<p>Both stylists have been with the company a good few years now and they have firmly embedded themselves as key members of the team.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>To become a Senior Stylist there is a strict criteria that needs to be fulfilled. The stylist’s skill set and the quality of their work is closely monitored, alongside their customer service skills. Both Leon and Michelle are extremely sought after stylists and their client bases are growing at a fast rate with customer feedback for them both always of the highest level. As they have consistently delivered at this exceptionally high standard for the last 6 months it was decided that they would both be promoted to Senior Stylist level, joining Kelly, Izzy &amp; Jo.</p>
<p>Leon said “I think it's amazing that I have made a step up on my career ladder and I am one step closer to reaching my ultimate goals“.</p>
<p>Michelle said “I've been hairdressing for 11 years and feel very proud to achieve my goal to be a senior stylist.“</p>
{{ Html::link('team', "To see the full PK team click here &gt;", array('class' => 'offer')) }}
</section> <!--end .hidden-->

<p class="author">Published by PK</p>
<time datetime="2015-11-13">13<sup>th</sup> November 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="CalebQA" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/caleb-1.jpg', 'Caleb') }}
<h3>Get to know Caleb</h3>
<p><strong>We continue on our question and answer session with our latest additions to the team. This month we asked Caleb about his time as a hairdresser. </strong></p>
<p>Click below to find out more about him&hellip;</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<dl>
	<dt>How long have you been hairdressing for Caleb?</dt>
	<dd>Five years (Including training)</dd>
	
	<dt>When did you join the PK team?</dt>
	<dd>The 8th of July 2015</dd>
	
	<dt>When did you first realise you wanted to become a hairdresser and where did you start?</dt>
	<dd>I was 19 and had just achieved my BTEC in photography when I realised that photography wasn’t the industry that I wanted to be in. So following my 20th birthday I applied for an apprenticeship in a local salon and never looked back.</dd>
	
	<dt>If you had chosen another profession what would it have been?</dt>
	<dd>Interior design has always grasped my interests along with studio photography.</dd>
	
	<dt>What key points make PK good at developing new stylists?</dt>
	<dd>From what I’ve seen so far there is a very clear line of progression. Each stylists strengths and weaknesses are recognised and a plan is made to either train others in your strengths or have someone train you where your weaknesses lie.
	Internal competitions keeps everyone fresh and gives them a chance to show off what they are capable of too. Every season we have an 'Essential Looks' workshop where we work on the latest looks. The staff are so friendly and helpful, their skills aren’t their best kept secret which is great.</dd>
	
	<dt>Whats your favourite hairstyle of all time and why?</dt>
	<dd>I have a love for Pixie cuts at moment. The option to have a sleek, smooth, classy look or ruffle up for a textured, fun yet stylish finish is something that really appeals to me.</dd>
	
	<dt>If you could cut anyone’s hair who would it be and why?</dt>
	<dd>Michael McIntyre. Would love to meet him and I think cutting his hair would be an experience in itself.</dd>
	
	<dt>How do you keep up with new ideas the latest trends?</dt>
	<dd>Colleagues, friends and the use of social media and Internet. Occasionally the news when celebs come out with some crazy styles that begin to trend.</dd>
	
	<dt>Whats the secret to a good haircut/style?</dt>
	<dd>Listening to your clients criteria and needs. You have to remember that every person has a different opinion. What I might class as an amazing cut or style, my client may find repulsive. Also pushing the boundaries and being unique in your cutting/styling techniques</dd>
	
	<dt>What tips can you give up and coming hairstylists?</dt>
	<dd>Practise and don’t get frustrated if something doesn’t quite work out. No one will ever know everything there is about hair but you get out of it what you put in.</dd>
	
	<dt>Can you describe a particular makeover that gave you the most satisfaction?</dt>
	<dd>A client of mine was turning 40 had long straight virgin hair that reached half way down her back and had never been coloured.
	We took the length up to shoulder length and went all over vibrant copper with a full fringe and styled with messy curls.
	she was so happy she cried and gave me a massive hug.</dd>
	
	<dt>What do you think sets PK apart from other salons?</dt>
	<dd>The staff and the views and opinions of the staff. Everybody I have spoken to knows exactly what they are doing and are very relaxed when doing so. To quote Jimmy “we are professional but not robotic” and I think thats the key.</dd>
	
	<dt>Whats the best thing for you about being a stylist at PK?</dt>
	<dd>I would say the people I meet and the sense of satisfaction I get from my clients knowing I’ve been a part of making them feel confident, happy and good about themselves. Having access to the latest product innovations.</dd>
	
	<dt>What do you think is the most exciting new hair trend?</dt>
	<dd>Definitely white/grey/silver hair. Seeing more and more silver ombres too</dd>
	
	<dt>Out of the product ranges which is your favourite and why?</dt>
	<dd>TIGI bed head - the products do what they say, look good, funky, contemporary and smell amazing.</dd>
	
	<dt>What is your favourite product?</dt>
	<dd>Bed head after party. Smells great, adds amazing shine and fab for dressing out curls.</dd>
	
	<dt>Is there a certain time period or style icon you look to for inspiration?</dt>
	<dd>I love the 1940’s vintage style of hair up. I often try to re-create these styles from pictures on pinterest.</dd>
	
	<dt>Is there a celebrity that inspires you? who and why?</dt>
	<dd>Not specifically. I sometimes look at celebrities and take note on their hair, make up, outfits but never really seek out inspiration from them.</dd>
	
	<dt>Do you have a signature hairstyle? if so, describe it.</dt>
	<dd>Curly blow dries. I love the texture, curls, height and volume.</dd>
	
	<dt>What inspires you in the world of fashion, hair and beauty?</dt>
	<dd>Quirkiness. Anything a bit different and outside the box. Vicky from our sister salon JAKATA actually gives me inspiration every time I see her. Hair, outfits, tattoos. Love it</dd>
	
	<dt>What would you say are your strengths as a hairdresser?</dt>
	<dd>Colouring has always been a strong point and also a favourite. I love doing hair up but I still need more practice at it to perfect my techniques. Customer service skills are something I pride myself on too.</dd>
</dl>
<p class="big">Caleb is eager to build his client base, so we're continuing some great offers with him until the end of November for new clients</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2015-10-14">14<sup>th</sup> October 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="NewRecruits" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/pk_starters.jpg', 'Caleb and Leanne') }}
<h3>New faces at Paul Kemp Hairdressing</h3>
<p><strong>It’s been a while since we’ve had new stylists join the PK team, so we decided earlier in the year it was time to take on some new talent! We had an in depth recruitment drive which led to inviting a number of hairdressers in for trade tests to see what they had to offer. The test involved each applicant doing a cut &amp; colour to demonstrate their current skill sets.</strong></p>
<p>Out of all the applicants we had two that really impressed us. <em>Caleb Barrie and Leanne Bartlett</em> both demonstrated some great skills, each with different levels of experience. 
We offered them both positions and we’re excited to announce that they’ll be joining the team on July 8th!</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/pk_starters_caleb.jpg', 'Caleb') }}
<p>Caleb decided to become a hairdresser after he gained a qualification in photography but decided that it wasn’t the industry for him. He signed up as a hairdressing apprentice and never looked back! He’s been working in a salon in Frodsham for the last few years where he’s built up a strong following.
He’s looking forward to joining a new vibrant team where he can push his skills to the next level!</p>
{{ Html::image('images/news_images/pk_starters_leanne.jpg', 'Leanne') }}
<p>Leanne started hairdressing three years ago, she completed her level 3 at a reputable salon in Stockton Heath and is now looking to work her way up the ranks here at Paul Kemp Hairdressing. She loves creating bold hairstyles whilst being extremely focused on creating a great experience for all her clients.</p>
<p><em>Both Caleb &amp; Leanne stand out as passionate hairdressers that really care about their work - that’s why we think they’ll fit in perfectly here at PK!</em></p>
<p class="offer">We've launched some great offers with Caleb &amp; Leanne to get them up and running!</p>

</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-08-01">2<sup>nd</sup> July 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="FibreForce" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/fibre_force3_2.jpg', 'Fibre Force') }}
<h3>BC Fibre Force</h3>
<p>We've all been guilty of mistreating our hair from time to time, whether it's through over straightening, over colouring or just using poor quality products. Hair is tough, but you do have to treat it right if you want it to behave itself!</p>
<p>Schwarzkopf realised there are a lot of people out there not giving their hair the love and care it needs, so they introduced BC Fibre Force - a complete range of products designed to return your hair to it's former glory over a relatively short period of time.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/fibre_force2_2.jpg', 'Fibre Force') }}
<p>Here's what Schwarzkopf say:</p>
<p><em>BC Fibre Force introduces a new dimension of hair repair returning even most eroded hair to its optimal level of force and resilience.</em></p>
<p><em>For the first time the formulas with Micronized Hair-Identical Keratins penetrate deeply into the hair architecture to re-cement specifically the Cell-Membrane-Complex, the intercellular bonding cement responsible for strong and resilient hair fibre.</em></p>
<p>Which in English means that it's going to make the most damaged hair feel loads healthier!</p>
<p><strong>The complete range is as follows:</strong></p>
{{ Html::image('images/news_images/fibre_force_2.jpg', 'Fibre Force') }}
	<p>BC Fibre Force Shampoo</p>
	<p>BC Fibre Force Spray Conditioner</p>
	<p>BC Fibre Force Rinse Out Conditioner</p>
	<p>BC Fibre Force Fortifier Treatment</p>
	<p>BC Fibre Force Keratin Infusion</p>

<p class="offer">Special offer: 3 for 2 on all Fibre Force products this month!</p>
<p>Find out more at the Schwarzkopf site: <br> <a href="http://www.schwarzkopf-professional.co.uk/skp/uk/en/home/products/care/bc-bonacure/bc-fibre-force.html" target="_blank">www.schwarzkopf-professional.co.uk/fibreforce</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2015-05-12">12<sup>th</sup> May 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="InSalonComp" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/comp-3.jpg', 'The Winners') }}
<h3>Stylists Battle it out in Essential Looks Competition</h3>
<p><strong>Every season Schwarzkopf launch their Essential Looks collections, a set of styles influenced by future hair/fashion trends. Every time the new collections are launched we have an in—salon workshop run by a Schwarzkopf educator to keep everyone up to date with the latest looks.</strong></p>
<p>This time we thought we’d mix it up a bit and have an in-house competition. The session was held at our sister salon Jakata where we paired everyone off. Each pair of stylists had to create their own interpretation of a colour &amp; cut from the latest Essential Looks collections on a training head.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/comp-2.jpg', 'Matt and Izzy') }}
{{ Html::image('images/news_images/comp-1.jpg', '') }}
<p>Jimmy said “It’s a brilliant way to get the staff on board with new cutting and colour trends, the Essential looks are always ahead of the game and are a great inspiration to the teams. The competition allows them to try out some new techniques”</p>
<p>The competition was judged by Adam, Jimmy and Steve from Schwarzkopf with bronze, silver and gold awards given out for the best interpretations of the styles.</p>
<p>The winners this time were Leon (from Paul Kemp Hairdressing) and Vikki (from Jakata) who did a bold bob inspired from the ‘Pearlescent Girls’ collection.</p>
<p>The session was great fun and we’ll have to see who the next winners will be when the next Essential Looks are launched!</p>
<p><a href="https://www.facebook.com/media/set/?set=a.974793939237632.1073741828.191283914255309&type=3" class="offer_heading" target="_blank">See all the photos from the day here &gt;</a></p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-01">5<sup>th</sup> May 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="Ashley" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/ashley.jpg', 'Ashley Tennant') }}
<h3>Ashley on road to success</h3>
<p><strong>Ashley Tennant has been working her way to becoming a stylist since she joined the PK team back in October 2013. She came on board as an apprentice and has been on an intensive training program. She recently qualified to become a Graduate stylist!</strong></p>
<p>It’s a vital stage of a hairdressers career - a time to build a client base and refine the skills and techniques that have been taught throughout the apprenticeship. Ashley is eager to take on new clients to expand her skill set and gain valuable experience.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>Graduate stylists offer exceptional value - their prices start off low and build up as they gain more experience. An average colour and cut price with Ashley is just £35!</p>
<p class="offer_heading"><strong>For a limited time Ashley is offering new clients a FREE Cut, Dry &amp; Style with every colour service! Call the salon for more details</strong></p>
<p>Here’s a Q &amp; A feature with Ashley so you can find out more about her&hellip;</p>
<dl>
	<dt>How long have you been hairdressing for Ashley?</dt>
	<dd>Almost 2 years</dd>
	
	<dt>When did you join the PK team?</dt>
	<dd>I started at the salon in October 2013</dd>
	
	<dt>When did you first realise you wanted to become a hairdresser and where did you start?</dt>
	<dd>I realised I wanted to be a hairdresser during my year 9 work experience. I started at Paul Kemp hairdressing as an apprentice where I have since finished my training and now work as a fully qualified graduate stylist.</dd>
	
	<dt>If you had chosen another profession what would it have been?</dt>
	<dd>As I studied English literature, Sociology and media in college I would have gone to uni to do journalism if I hadn’t chosen to do hairdressing.</dd>
	
	<dt>What key points make Paul Kemp Hairdressing good at developing new stylists?</dt>
	<dd>All management and colleagues are fully supportive, with training courses readily available in places such as London &amp; Manchester</dd>
	
	<dt>What's your favourite hairstyle of all time and why?</dt>
	<dd>My current favourite style is the long messy bob as it looks on trend and is effortless to style.</dd>
	
	<dt>How do you keep up with new ideas the latest trends?</dt>
	<dd>I keep up with latest trends by following celebrity news such as Daily Mail online as it is usually celebrities who are ‘wearing it first’ like Kylie Jenner's bob.</dd>
	
	<dt>Whats the secret to a good haircut/style?</dt>
	<dd>Regular cuts, in salon treatments and a good shampoo and conditioner such as Bed Heads 'Urban Antidotes'</dd>
	
	<dt>What tips can you give up and coming hairstylists?</dt>
	<dd>Be confident, watch other stylist as much as you can to pick up any tricks.</dd>
	
	<dt>Can you describe a particular makeover that gave you the most satisfaction?</dt>
	<dd>Cutting one clients hair from a style she was bored with to an edgy Agnes Deyn style pixie cut. She loved it and it looked almost identical to the picture she showed me which made me feel proud!</dd>
	
	<dt>What do you think sets PK apart from other salons?</dt>
	<dd>Friendly staff, approachable managers. Reputable and fun to work in.</dd>
	
	<dt>Whats the best thing for you about being a stylist at PK?</dt>
	<dd>Being part of a team who are all real friends and get on out and inside of work.</dd>
	
	<dt>What do you think is the most exciting new spring summer 2015 hair trend?</dt>
	<dd>Schwarzkopf’s new ‘Pearlescense’ colour range excites me as I think this is a great way to spice up blonde hair. I also think the pastel colours are on trend this spring/summer.</dd>
	
	<dt>Out of the product ranges which is your favourite and why?</dt>
	<dd>Bed head is my favourite product range as I think they have clever packaging and everything smells amazing. Also guaranteed that all products actually do what they say.</dd>
	
	<dt>What is your favourite product?</dt>
	<dd>Small talk as I think this is a really nice blow drying product which makes hair appear thicker and smoother.</dd>
	
	<dt>Is there a celebrity that inspires you? Who and why?</dt>
	<dd>Blake Lively is a celebrity who inspires me as she has a very effortless style, her hair always looks amazing and boho-esque</dd>
	
	<dt>Do you have a signature hairstyle? if so, describe it.</dt>
	<dd>Messy, loose curl/waves</dd>
	
	<dt>What are your strengths in hairdressing?</dt>
	<dd>Colouring is my favourite thing to do at the moment but I can’t wait to start learning weft extensions as I enjoy plaiting hair and creating totally different styles.</dd>
</dl>

<p>Thank you to Ashley for sharing that - don't forget to take advantage of her fantastic offer!</p>


</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2015-03-19">19<sup>th</sup> March 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="Pearlescence" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/pearlescence.jpg', 'Igora Pearlescence') }}
<h3>New Igora Pearlescence Colours</h3>
<p><strong>We’ve all noticed the growing trend for pastel tones over the last year and it looks like it’s here to stay, especially coming into spring and summer.</strong></p>
<p>Mixing subtle tones of pink, powder blue or soft lilacs into bleached blonde hair is a great way to update your look.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>Up until now its been difficult to mix a colour to create these effects, often using our creative genius as professional colourists to create unique concoctions!</p>
<p>That’s all changed now with the launch of Schwarzkopf’s brand new <em>Pearlescence</em> colours. A range of 8 new shades from delicate pastel effects to bold, standout tones.</p>
<p>We’re all really eager to give these a go, so if you fancy something new then maybe this could be for you!</p>
<p class="offer">With every Pearlescent colour we do receive a FREE nail varnish (while stocks last)</p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2015-03-04">4<sup>th</sup> March 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="BabyHeath" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/jo_baby.jpg', 'Jo Mahoney') }}
<h3>Introducing Heath</h3>
<p><strong>Paul Kemp Hairdressing Senior Stylist Jo has recently had a new addition to her family. She gave birth to Heath Birchall on February 12th at 1:24am and he weighed 9lb 1oz.</strong></p>
<p>The team are delighted for Jo, who has popped in a few times with baby Heath to meet everyone.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/heath.jpg', 'Baby Heath') }}
<p>Jo is going to be on maternity leave for a fair few months but we’ll keep you updated as to when she’s ready to start back.</p>
<p>If Jo is your regular stylist just give us a call and we’ll recommend another suitable stylist for your needs while she’s off.</p>
{{ Html::link('team', "Visit our team page to see a profile of all our stylists &gt;", array('class' => 'offer')) }}
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="205-03-04">4<sup>th</sup> March 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="HappyNewYear" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/new_year.jpg', 'Happy New Year') }}
<h3>Happy New Year!</h3>
<p><strong>Hope you all had a great Christmas and New Year, we had a manic time leading up to Christmas so it was great to have a well earned break for a few days.</strong></p>
<p>Things aren't quite back to normal yet as we are soon to embark on our trip to Amsterdam (for a late Christmas party). I'm sure things are going to get interesting on that one! (pictures to follow...)</p>
<p>The salon will be closed from <strong>Friday 2nd Jan</strong> and we'll re-open on <strong>Wednesday 7th Jan</strong>.</p>
<p>If you want to make an appointment you still can! All calls are to be diverted to Jakata who will be logged into the PK system to make bookings.</p>
<p class="offer">Once again - Happy New Year - here's to a fantastic 2015!!</p>
</section> <!--end .visible-->
<p class="author">Published by PK</p>
<time datetime="2015-01-02">2<sup>nd</sup> Jan 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="MegSession" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/meg_session.jpg', 'Meg Mullaney Session Styling') }}
<h3>PK Stylist Collaborates with UK's Up &amp; Coming Fashion Talent</h3>
<p><strong>Our very own Meg was invited to work alongside Schwarzkopf’s LEAP Artistic team as a session stylist at a prestigious catwalk fashion show for the top eight fashion graduates of London's Middlesex University. The event was held at London’s St Pancras hotel (you might recognise it from the the Spice Girls 'Wannabe' video!).</strong></p>
<p>The designers involved are all lined up to be 'the next big thing' in the fashion industry. Some of the designers have already been recruited by top fashion brands, which were using the event to showcase their latest work.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/pancras.jpg', 'St Pancras Hotel') }}
{{ Html::image('images/news_images/london_show.jpg', 'London Fashion Show') }}
<p>Megan had to work closely with the designers to create a look that complimented their vision. Her work was on display to some of the UK's leading fashion talents. 
In previous years the designers have gone on to work with the likes of Alexander McQueen, Vivienne Westwood and Givenchy.</p>
<p>Megan said "It was a great opportunity for me to show people what I can do, it's a great feeling to know that I was collaborating with designers that could be the next Stella McCartney!".</p>
<p><a href="http://www.mdx.ac.uk/aboutus/news-events/news/fashion-show-14.aspx" target="_blank">Read more about the event here ></a></p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2014-06-18">18<sup>th</sup> June 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="MichelleArrival" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/michelle_baby.jpg', 'Michelle and Sophia') }}
<h3>New Arrival for Michelle</h3>
<p><strong>We're pleased to announce that PK stylist Michelle Railton gave birth to a baby girl on the 16th of May. She's called Sophia and weighed 8lb 2oz</strong></p>
<p>Michelle went on maternity leave just a week earlier and will be taking a good bit of time off. The whole team dropped round to see Michelle &amp; Sophia on Monday and they're both doing really well.</p>
<p>We'll keep you updated with Michelle's return to the salon date, plus she has the option to do up to ten days in the salon whilst on maternity - we'll let you know if she decides to do so.</p>
</section> <!--end .visible-->
<p class="author">Published by PK</p>
<time datetime="2014-04-27">27<sup>th</sup> May 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="newBC" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/bonacure.jpg', 'Bonacure') }}
<h3>New BC Bonacure launch</h3>
<p><strong>Tailor Made Care for Ultimate Hair Perfection</strong></p>
<p>Schwarzkopf have always had a big part to play in the salon. Every colour service we do uses Schwarzkopf's amazing colour range and we've always used their hair care range. In recent years Tigi's products have become more widely used in the salon as the brand really connected with the team and clients alike - making Schwarzkopf's products seem a little dull and dated.</p>
<p>So we were all really excited to hear that the Schwarzkopf range was getting a much needed relaunch with the packaging getting a facelift and the products getting a complete  overhaul - introducing some amazing new technology.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/new_bc.jpg', 'New Bonacure') }}
<p>The new range has now arrived in the salon and I've got to say that so far we're all really impressed. The packaging looks a lot fresher and modern (would look great in any bathroom) and after using a variety of the products on our clients the results have been great. The newly formulated products definitely have the edge and the range is now a lot more comprehensive.</p>
<p>Schwarzkopf claim the products outperform the market leaders and that they bring your hair closer than ever to natural perfection! If your looking for flawless smoothness, superior colour shine, ultimate body, excellent hydration, stunning rejuvenation, outstanding activation or unmatched replenishment then these could be the products for you!</p>
<p><strong>Here's an overview of the products:</strong></p>

<h4>BC REPAIR RESCUE<br>for Damaged &amp; Distressed Hair</h4>
{{ Html::image('images/news_images/repair-rescue.jpg', 'Repair Rescue') }}
<ul class="prodlist">
	<li><strong>Repair Rescue Shampoo</strong><br>
	A caring shampoo for normal to fine damaged hair.</li>
	<li><strong>Repair Rescue Deep Nourishing Shampoo</strong><br>
	An intensively caring shampoo for extremely damaged normal to thick hair.</li>
	<li><strong>Repair Rescue Spray Conditioner</strong><br>
	A leave-in conditioner with instant repairing action for damaged hair.</li>
	<li><strong>Repair Rescue Conditioner</strong><br>
	Intensive creamy conditioner for damaged hair.</li>
	<li><strong>Repair Rescue Treatment</strong><br>
	Reconstructing treatment for normal to fine damaged hair.</li>
	<li><strong>Repair Rescue Deep Nourishing Treatment</strong><br>
	The most intensive BC treatment for extremely damaged normal to thick hair.</li>
	<li><strong>Repair Rescue Sealed Ends</strong><br>
	An intensive cream-serum for hair ends that seals and prevents splitting.</li>
</ul>

<h4>BC COLOR FREEZE<br>
For coloured and highlighted hair</h4>
{{ Html::image('images/news_images/colour-freeze.jpg', 'Color Freeze') }}
<ul class="prodlist">
	<li><strong>Color Freeze Gloss Serum</strong><br>
	A crystal clear and lightweight shine serum for colour treated hair.</li>
	<li><strong>Color Freeze Sulfate-Free Shampoo</strong><br>
	Gentle shampoo for colour treated hair, ideal for use in post-colour service.</li>
	<li><strong>Color Freeze Rich Shampoo</strong><br>
	A highly caring shampoo for over-processed and dull colour treated hair.
	</li>
	<li><strong>Color Freeze Silver Shampoo</strong><br>
	Pigmented shampoo for cool colour tones.</li>
	<li><strong>Color Freeze Spray Conditioner</strong><br>
	A lightweight conditioning spray for colour treated hair.
	</li>
	<li><strong>Color Freeze Conditioner</strong><br>
	A rich creamy conditioner for colour treated hair.</li>
	<li><strong>Color Freeze Treatment</strong><br>
	An intensely restoring, creamy treatment for colour treated hair.</li>
	<li><strong>Color Freeze Thermo-Protect Cream</strong><br>
	A weightless leave-in treatment with heat protection.</li>
</ul>

<h4>BC MOISTURE KICK<br>
For normal to dry, wavy or curly hair that’s coarse or brittle, lacking elasticity and bounce.</h4>
{{ Html::image('images/news_images/moisture-kick.jpg', 'Moisture Kick') }}
<ul class="prodlist">
	<li><strong>Moisture Kick Beauty Balm</strong><br>
	A moisturising care &amp; styling balm with added heat protection.</li>
	<li><strong>Moisture Kick Shampoo</strong><br>
	A moisturizing shampoo for normal to dry, brittle or curly hair.</li>
	<li><strong>Moisture Kick Spray Conditioner</strong><br>
	An instantly hydrating, lightweight spray conditioner for normal to dry, brittle or curly hair.</li>
	<li><strong>Moisture Kick Treatment</strong><br>
	Deeply hydrating treatment for normal to dry, brittle or curly hair.</li>
	<li><strong>Moisture Kick Defining Cream</strong><br>
	A rich hydrating cream to define curly or coarse hair.</li>
</ul>

<h4>BC TIME RESTORE<br>
For mature hair that has lost strength or moisture leaving it weak, dry or brittle</h4>
{{ Html::image('images/news_images/time-restore.jpg', 'Time Restore') }}
<ul class="prodlist">
	<li><strong>Time Restore Rejuvenating Serum</strong><br>
	Ultimate all-in-one scalp and hair serum for protection, care and elasticity.</li>
	<li><strong>Time Restore Shampoo</strong><br>
	A gently cleansing shampoo for mature hair.</li>
	<li><strong>Time Restore Conditioner</strong><br>
	A rich conditioner for dry and brittle mature hair.</li>
	<li><strong>Time Restore Treatment</strong><br>
	A strengthening treatment for mature hair.</li>
	<li><strong>Time Restore Rejuvenating Spray</strong><br>
	A lightweight 2-phase detangler and volumiser in one.</li>
</ul>

<h4>BC VOLUME BOOST<br>
For fine to normal hair, lacking body, volume and vitality</h4>
{{ Html::image('images/news_images/volume.jpg', 'Volume') }}
<ul class="prodlist">
	<li><strong>Volume Boost Shampoo</strong><br>
	A purifying shampoo for fine and weak hair.</li>
	<li><strong>Volume Boost Perfect Foam</strong><br>
	Detangling mousse that increases body.</li>
	<li><strong>Volume Boost Refresher</strong><br>
	A refreshing spray to boost body of fine and weak hair.</li>
</ul>

<h4>BC SMOOTH SHINE<br>
For thick, coarse, wavy, curly, unmanageable and frizzy hair</h4>
{{ Html::image('images/news_images/smooth.jpg', 'Smooth') }}
<ul class="prodlist">
	<li><strong>Smooth Perfect Smoothing Cream</strong><br>
	Smoothing cream with heat protection.</li>
	<li><strong>Smooth Perfect Shampoo</strong><br>
	Taming shampoo for unruly, coarse hair.</li>
	<li><strong>Smooth Perfect Conditioner</strong><br>
	An effective taming conditioner for unruly, coarse hair.</li>
	<li><strong>Smooth Perfect Treatment</strong><br>
	Intensive taming and nourishing treatment for unruly to coarse hair.</li>
</ul>
<p class="offerHeading"><strong><em>The full range is available in the salon now!</em></strong></p>
<p class="offer"><em>Pick up some free samples to try the products out for yourself (while stocks last)</em></p>
<p><a href="http://www.schwarzkopf-professional.co.uk/skp/uk/en/home/products/care/bc-bonacure/philosophy.html" target="_blank">Visit the Schwarzkopf Professional site for more information</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2014-04-22">22<sup>nd</sup> May 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="SummerBlondes" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/blonde_me1.jpg', 'Summer Blonde 1') }}
<h3>Ultimate Summer Blondes</h3>
<p><strong>With summer almost here we'll soon be inundated with requests for dark to lights or brighter lighter blondes. There's just something about summer that makes everyone want to go blonde!</strong></p>
<p>Before you get excited about the thought of those bright blonde locks, put a little time into thinking about the best steps to take to achieve the perfect result.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/blonde_me3.jpg', 'Summer Blonde 2') }}
<p>The first thing you should think about is the preparation of your hair before the service followed by the end result you want and then then how you're going to maintain the colour afterwards.</p>
<p>For me the biggest importance comes from what you do in the two months in advance of having the in salon service. Ask yourself what really makes one blonde better than another blonde?</p>
<p>The answer is the products that are used on your hair before, during and after the blonde service.</p>
<p>If you have really thought it through you would have spoken to you stylist on your last visit and discussed what to do before you have the colours applied. My best advice is you cannot get enough moisture and protein in your hair before you go ahead with the service. Start with Professional products before you go blonde (if you haven’t already) and get the foundations into the hair before you go ahead with the colour service.</p>
{{ Html::image('images/news_images/repair-rescue.jpg', 'Repair Rescue') }}
{{ Html::image('images/news_images/moisture-kick.jpg', 'Moisture Kick') }}
<p>Ask advice from your stylist about the best products to use in the months building up to your blonde service. It's vital to load the hair with protein &amp; moisture to ensure the healthiest result. In most cases I would recommend crossing the Schwarzkopf BC Repair range and the Bc Moisture kick range. Your going to be investing a fair bit of money on your next colour and cut, if you want the best result then why not spend the extra £40 - £60 on a great shampoo, conditioner, treatment &amp; moisture balm. These products used correctly will last you 3x the amount of time those high street brands, and the outcome of your hair is far superior.</p>
<p>With these foundations in place, your choices of levels of blondes are far greater and you will maintain the fullness, condition and shine of your hair. If your hair is already damaged then look into going on a recovery regime with Schwarzkopf BC Fibre Force. This will bring your hair back from the dead and ready for blondes in up to 10 weeks (depending on how damaged it is of course).</p>
<p>When it comes to having the actual lightening service, we have the most technologically advanced products available to give you your summer look. Bleaching hair has always had a stigma of being really damaging to the hair, drying it out and causing it to snap  - not anymore! We have two salon products which combine to create a perfect blonde with minimal damage, both from the Schwarzkopf 'Blonde Me' range:</p>
<h4>Pre lift Kera Protector</h4>
{{ Html::image('images/news_images/blonde_me_kera.jpg', 'Blonde Me Kera Protector') }}
<p>This is a revolutionary in-salon product that acts as a protective outer layer to your hair whilst allowing the bleaching products in to do their job whilst preventing all the swelling and cuticle damage that normally comes with a bleaching service. By having this applied you really do maintain healthy hair qualities - meaning less damage and more shine. This pre bleaching treatment does come with an additional charge of £5-£10, but it's a no brainer if it's going to keep your hair in fantastic condition.</p>
<h4>Blonde me Crystal bleach</h4>
{{ Html::image('images/news_images/blonde_me_crystal.jpg', 'Blonde Me Crystal Bleach') }}
<p>This state of the art bleaching agent is miles ahead of other bleaching products on the market. It's clear in colour so the stylist can really see how your hair is lifting. It's so soft on your hair you will notice the difference immediately, leaving minimal damage  and maximum moisture left in the hair. I find when I use it, it actually leaves the hair feeling better than before! If you want platinum white blonde then dependant on the lift needed this product may not be for you (we have another 'Blonde Me' bleach that lifts 9 levels with minimum damage!) but any other blondes and you will not be left disappointed.</p>
<p><strong>The main things to take from this are:</strong></p>

	<p>- Use quality professional product's in the run up to the service.</p>
	<p>- Ensure the highest quality salon products are used during the service</p>
	<p>- Maintain the health and condition of your hair by continuing to use the products recommended by your stylist.</p>

<p class="offer">To book in to talk to one of our stylist's about going lighter call the salon on 01925 444488</p>
</section> <!--end .hidden-->
<p class="author">Published by Jimmy</p>
<time datetime="2014-05-20">20<sup>th</sup> May 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="Ashley" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/ashley2.jpg', 'Ashley Tennant') }}
<h3>Ashley's fast track to success</h3>
<p><strong>Since we opened almost three years ago the Paul Kemp team has grown almost double! We've taken on a variety of staff from different backgrounds with a variety of levels of experience. During this time we've trained and developed two of our team members from apprenticeship level. There's always something special about home grown talent and we're really proud of Tash and Meg who have both matured into amazing hairdressers.</strong></p>
<p>We are extremely selective about who we choose to be an apprentice, we're looking for people who have the passion and determination to get through the the gruelling training. When we met our latest Apprentice Ashley Tennant, we could tell straight away that she fulfilled the criteria!</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/ashley1.jpg', 'Ashley Tennant') }}
<p>Nineteen year old Ashley is continuing our quest for home grown talent, she's on a fast track intensive training plan with the aim to be a graduate stylist within 6 months. Before she chose hairdressing as a career Ashley studied for her A Levels after which she decided to opt for a more vocational qualification. Her training covers all aspects of hairdressing from cutting &amp; colouring to specialist services along with all the other important stuff like customer service and reception skills. Working alongside the other members of the PK team ensures she's getting the best experience available.</p>
<p><em>Ashley said "I've really settled into the team now, it's a great learning environment. Training leader Jack is working closely with me to ensure my hairdressing skills and knowledge are progressing fast. I just can't wait to be on the shop floor and have my own clients like Meg &amp; Tash!"</em></p>
<p class="offer">Ashley is looking for colour &amp; cut models to progress her training.</p> 
{{ Html::link('apprentice.create', "If you\'re interested in being a model click here and fill in your details or call the salon on 01925 444488 &gt;", array('class' => '')) }}
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2014-05-15">15<sup>th</sup> May 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="Starlight" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/starlight1.jpg', 'Starlight PK Team') }}
<h3>PK Raise awareness for Starlight Walk</h3>
<p><strong>At midnight on Friday 20th June thousands of women will be taking part in the <em>Starlight Ladies Walk</em> - the Paul Kemp Team are raising awareness of the event to help get as many of our clients taking part as we can!</strong></p>
<p>The Starlight Ladies Walk is the biggest and best sponsored walk in Warrington. During the last 8 years, 12,000 ladies have taken part and raised £1.5 million for St. Rocco’s Hospice. The walk starts at Midnight on Friday 20th June.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/starlight2.jpg', 'Starlight PK Team') }}
<p>This years theme is ‘A Walk to Remember’, whether you are walking in memory of a loved one or a fun walk with friends or family- this is sure to be a Walk to Remember!</p>
<p>If you enter before the 30th April it's just £12 (it's £15 after this date). This gets you your place on the Walk, a special Starlight Walk t- shirt, medal, refreshments and breakfast on the day!</p>
<p class="offer_heading">For more information visit the following links:</p>
<p><strong><a href="http://www.stroccos.org.uk/b0cdee70074144a4bec6403704aca745?site=54a3c9b1-1efc-4453-bc75-9194af1f7f5c" target="_blank">What is the Starlight Walk?</a></strong></p>
<p><strong><a href="https://twitter.com/stroccos" target="_blank">St. Rocco's Twitter Page</a></strong></p>
<p>or pick up a flyer from the salon.</p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-01">25<sup>th</sup> April 2013</time>
</article> <!--end #article-->


<article class="article">
<a id="springLooks" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/trends.jpg', '') }}
<h3>Spring into a new look</h3>
<p><strong>Winter is officially over and we're all ready for a Spring makeover. If you're getting bored of the same style you've had over the winter months, why not think about having a big change!</strong></p>
<p>If you're stuck for ideas we've put together a selection of recent celebrity looks to inspire you. Whether you want it lighter, darker or shorter just ask one of our stylists for some advice on a look that will suit you!</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/kate_mara.jpg', 'Kate Mara') }}
<h4>KATE MARA'S BLONDE BOB</h4>
<p>Whether you’re looking to chop it all off or lighten things up, allow Kate Mara's new shoulder-skimming bob and vibrant blonde colour serve as inspiration for your next hair makeover.</p>
<p><img class="bigPic" src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/olivia_wilde.jpg" width="250" height="300"></p>
<h4>OLIVIA WILDE'S OMBRE WAVES</h4>
<p>It looks like the ombre is here to stay this spring! Olivia Wilde shows off her dip-dyed look with loose, effortless waves.</p>
<p><img class="bigPic" src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/taylor_swift.jpg" width="250" height="300"></p>
<h4>TAYLOR SWIFT'S LONG BOB</h4>
<p>Famous for its versatility, a chin-skimming bob is universally flattering. Glam the look up with a long, sweeping fringe like Taylor Swift.</p>
<p><img class="bigPic" src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/reese_witherspoon.jpg" width="250" height="300"></p>
<h4>REESE WITHERSPOON'S SOFT FRINGE</h4>
<p>Reese Witherspoon's new wispy fringe is low-maintenance enough for beginners. The brow-skimming length leaves room for versatility.</p>
<p><img class="bigPic" src="<?php echo Yii::app()->request->baseUrl; ?>/images/news_images/michelle_williams.jpg" width="250" height="300"></p>
<h4>MICHELLE WILLIAMS' GROWN-OUT PIXIE</h4>
<p>Michelle Williams' long, side-parted layers not only offer a chic solution to the tricky growing-out phase of 2013's pixie craze, but the length also could become one of spring's top hair trends to try.</p>
<p class="offer">If you've got a new style in mind, go ahead and tell us about it - you know you're in safe hands with the PK team!</p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2014-04-04">4<sup>th</sup> April 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="teamParty" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/party_team.jpg', 'PK Lodge') }}
<h3>PK Lodge Break Pictures</h3>
<p><strong>Earlier this month the Paul Kemp Hairdressing team all headed off to spend 5 days in a Lodge in Tattershall as their Christmas party. It was a fantastic week - perfect for setting 2014 off on the right foot.</strong></p>
<p>The whole team got on really well and didn't want to come home. Highlight's of the week were hitting the hot tub, getting extremely drunk and eating loads!</p>
<p><a href="https://www.facebook.com/media/set/?set=a.676242859092743.1073741826.191283914255309&type=1" class="offer_heading" target="_blank"><strong>Check out the pictures here ></strong></a></p>
</section> <!--end .visible-->
<p class="author">Published by Adam</p>
<time datetime="2014-01-01">24<sup>th</sup> January 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="AvedaChristmas" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/aveda_christmas.jpg', 'Aveda at Christmas') }}
<h3>Give something a little different this Christmas</h3>
<p><strong>Here at Paul Kemp Hairdressing we stock a wide range of products from Schwarzkopf, Tigi, GHD and Aveda. During this festive season each product company bring out their own Christmas gift sets. If you're looking for something a little different as a gift this Christmas then check out our Aveda packs.</strong></p>
<p>Each set contains limited edition, miniature versions of your favourite Aveda products, giving the opportunity for your friends and family to try them out for themselves. The limited-edition gift sets feature certain products that are available only during the Christmas season.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p class="offer">Choose from the following:</p>
{{ Html::image('images/news_images/.jpg', 'Aveda') }}
<h4>Give Warmth</h4>
<p><strong>Features holiday Soy Wax candle with a certified organic ginger, ginger lilly &amp; clove aroma</strong></p>
<p>The wonderful Christmassy aroma from this candle will brighten anyones day.<br><br></p>
{{ Html::image('images/news_images/aveda5.jpg', 'Aveda') }}
<h4>Give Soothing</h4>
<p><strong>Features Shampure Hand &amp; Body wash &amp; Body Lotion</strong></p>
<p>The perfect stress reliever.<br><br></p>
{{ Html::image('images/news_images/aveda7.jpg', 'Aveda') }}
<h4>Give Refresh-Mint</h4>
<p><strong>Features Rosemary Mint Shampoo, Conditioner &amp; Body Lotion</strong></p>
<p>Ideal gift for anyone who likes an invigorating shower.<br><br></p>
{{ Html::image('images/news_images/aveda2.jpg', '') }}
<h4>Give Soft Hands</h4>
<p><strong>Features Hand Relief in Original, Rosemary Mint &amp; holiday aromas </strong></p>
<p>The perfect gift to replenish those dry hands.<br><br></p>
{{ Html::image('images/news_images/aveda8.jpg', '') }}
<h4>Give Smiles</h4>
<p><strong>Features Nourish-Mint Rehydrating Mini Lip glazes in Winterberry &amp; Himalayan Snow</strong></p>
<p>For the perfect kiss under the mistletoe.<br><br></p>
{{ Html::image('images/news_images/aveda10.jpg', '') }}
<h4>Give Baths of Beauty</h4>
<p><strong>Features Beautifying Composition, Body Cleanser &amp; Body Moisturiser</strong></p>
<p>A great gift for your mum<br><br></p>
<p>What makes the Aveda gift sets extra special is that the packaging is made with handmade paper from Nepal. Aveda’s purchase of this beautiful paper helps families living there to buy food and clothing, repair their homes and send their children to school.</p>
<p>This is just a selection of the packs available - <em>plus your own custom gift selection can be made up for a more personalised present.</em></p>

<p class="offer"></p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-11-30">30<sup>th</sup> November 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="paulNoMore" class="anchor"></a>
<section class="visible"></section>
{{ Html::image('images/news_images/paul_exit.jpg', '') }}
<h3>Paul Kemp no longer at the salon</h3>
<p><strong>At the end of September <em>Paul Kemp</em> decided to leave the salon. He resigned and has gone on to pursue something else.</strong></p>
<p>The salon continues as usual with team leader Kellie Reedy still at the helm.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/pk_replacers.jpg', '') }}
<p>Salon owner Adam Carter said "It's business as usual at PK - the team are stronger than ever. <br> We can't apologise enough for Paul's quick departure and any inconvenience it may have caused to his clients but our other stylists are on hand to ensure a smooth transition."</p>
<p>Many people are asking the question of whether the salon name will remain. A full rebrand is both costly and time consuming so the name will stay for a good while longer but will inevitably change in the future.</p>
<p class="offer">If you were a regular client of Paul's please contact the salon to find out the great offers we're running.</p>

</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-08-01">16<sup>th</sup> October 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="ghdEclipse" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/eclipse.jpg', 'GHD Eclipse') }}
<h3>A New Styler for a New Era</h3>
<p><strong>Ghd have always come up with the goods when it comes to producing the best styling irons on the market. The PK team were eager to get their hands on the new <em>Eclipse</em> iron which claims to revolutionise styling on hard-to-tame hair.</strong></p>
<p>The irons arrived in the salon last month and we've had chance to have a good play with them and put them to the test.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>When the irons first arrived it was clear to see <em>ghd</em> had opted for a new look to differentiate them from the other irons. They look more streamlined and almost futuristic in their style. We plugged them in and and went to switch them on. The power button is located on the top rather than near the plates which I guess is safer and less likely to snag in the hair.</p>
<p><iframe width="400" height="300" src="//www.youtube.com/embed/342WUWxK1rY" class="right" frameborder="0" allowfullscreen></iframe></p>
<p>When you turn them on they make a noise similar to booting up a Wii, and the power button glows to indicate they are warming up. The button wasn't too responsive (you had to press and hold it) and it was difficult to tell wether you had switched them on or not.</p>
<p>Once they had heated up we tried them out. The casing is a little bulkier, with a bigger gap between the plates, this makes them better for taking larger sections. The casing is also more insulated and provides cooler handling. They flex quite a bit and almost feel a little wobbly but they're designed to have a fair bit of movement to allow for smoother gliding over courser textured hair. They felt really smooth through the hair, I know new <em>ghd's</em> always feel pretty smooth, but these definitely had the edge.</p>
<p>The main thing that differentiates them from the previous models is in how the plates heat. Patented <em>Tri-Zone technology</em> uses six quick thinking sensors (three on each plate) to ensure no heat loss during styling.</p>
<p>First impressions of the new <em>ghd Eclipse</em> are good, I always go out of my way to pick these up when I'm styling my clients hair - especially on thick, course hair. The difference isn't massive but definitely noticeable. If I was looking to buy a new set of irons I would definitely go for these. At &pound;200 they're pricey, but worth every penny. Of course if the price puts you off, the <em>gold series (mark 5)</em> is still available at &pound;125 and the budget <em>mark 4 styler</em> is just &pound;99.</p>

<p><strong>News Update: The Eclipse irons are now available for &pound;145 for a limited time! (Updated: 03/12/13)</strong></p>

<p class="offer_heading">All varieties of ghd's are available in the salon - just ask your stylist.</p>
<p class="offer"></p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-01">2<sup>nd</sup> August 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="MichelleRailton" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/michelle_r_1.jpg', '') }}
<h3>Welcoming Michelle Railton to the team</h3>
<p><strong>It's been over 2 years now since we opened the doors to Paul Kemp Hairdressing and the team has progressively gone from strength to strength. We thought it was about time we brought some new blood on board, and when stylist <em>Michelle Railton</em> showed interest in joining us, we knew she would be the perfect fit.</strong></p>
<p>Michelle, aged 25, has almost ten years experience as a hairdresser and after taking a short break from it, realised there was no other career for her (plus no other salon she wanted to work for than here at PK!)</p>
<p>We had the chance to ask Michelle some questions about why she chose to work at Paul Kemp hairdressing, and what drives her as a hair stylist.</p>
<p class="reveal">Read the full interview here ></p>
</section> <!--end .visible-->
<section class="hidden">
<dl>
	<dt>How long have you been hairdressing for Michelle?</dt>
	<dd>I started hairdressing 9 years ago.</dd>
	
	<dt>When did you first realise you wanted to become a hairdresser and where did you start?</dt>
	<dd>I have always wanted to be a hairstylist. At the age of 14 I started to work Saturdays in a local salon, where I later began an apprenticeship when I left school.</dd>
	
	<dt>Why did you choose to join Paul Kemp hairdressing?</dt>
	<dd>The salon has a very good reputation from both clients and staff. I had my hair coloured in the salon by Leon and I really liked the atmosphere. The stylists seem to get on really well with each other which I think is important.
	I also believe that there is a lot of opportunities to progress your career in the company.</dd>
	{{ Html::image('images/news_images/michelle_r_2.jpg', '') }}
	
	<dt>When did you decide you wanted to join the Paul Kemp team?</dt>
	<dd>After I left Daniel Anderson hairdressing, I was drawn to join the Paul Kemp team but I decided to give running my own salon a go,  which I did for a year. Since I finished that in January, I took time out of hairdressing to decide what I  wanted to do. There was only one salon that I really wanted to work at in Warrington - that was Paul Kemp hairdressing!</dd>
	
	<dt>If you had chosen another profession what would it have been?</dt>
	<dd>After taking time out of hairdressing, I pursued a career in recruitment.</dd>
	
	<dt>What's your favourite hairstyle of all time and why?</dt>
	<dd>Classic graduated bob, because you can take a classic style, and create many variations and changes to accommodate a clients requirements. I believe it is a timeless hairstyle that can suit all types of clients.</dd>
	
	<dt>If you could cut anyone's hair who would it be and why?</dt>
	<dd>Sienna Miller because she has the perfect face shape/features to create any style. There would be no limitations or factors that would determine a certain hairstyle. She always has softer cut/finish and I would love to create something much bolder with harder lines and dramatic finish.</dd>
	
	<dt>How do you go about creating your cutting/colour styles? Is it difficult to think up new ideas and keep up with the latest trends?</dt>
	<dd>I always have a consultation with every client. I ask them a series of questions which help me to identify their needs and what options of styles I could create. e.g:
	<ul class="list">
		<li>- Are you happy with your hair at the minute?</li>
		<li>- What do you hate about your hair?</li>
		<li>- What is the worst thing that I could do to your hair today?</li>
		<li>- If you could have any celebrities hair, who's would it be?</li>
	</ul>
	
	This helps me to understand their likes/dislikes along with their tastes in styles. I can then give my options on styles/colours. I sometimes combine a number of styles into one (if they like a certain fringe but like layers from another style etc). I always suggest a change to clients, so they don't get bored. I think if you are really into hairdressing, you will always be researching trends, which is what I enjoy.</dd>
	
	<dt>Whats the secret to a good haircut/style?</dt>
	<dd>Fully understanding a clients requirements.</dd>
	
	<dt>What tips can you give to up and coming hairstylists?</dt>
	<dd>
	<ul class="list">
	<li>- Build a good trust with your clients. If they trust you, they will never leave you.</li>
	<li>- Always be honest with a client, they appreciate it more.</li>
	<li>- Always offer existing clients a 'change' at least every 3 months. They will not get bored and go elsewhere.</li>
	<li>- Always look at other stylist work. You will always learn new things.</li>
	</ul>
	</dd>
	{{ Html::image('images/news_images/michelle_r_3.jpg', '') }}
	
	<dt>Can you describe a particular makeover that gave you the most satisfaction?</dt>
	<dd>One of my regular and loyal  customer would always require the same colour/style and was very reluctant to change. She had a natural tone of auburn with a base 6, which she would cover with a full head of bleach and ash toner. Although the colour suited her, it was far too harsh for her natural skin tone and the years of bleaching was affecting the condition of her hair.<br>
	Over the years, I had built up a good trust and I finally persuaded her to have a change. She was very nervous as I suggested taking her back to a base 6 with a vibrant copper tone, shortening the length to the shoulders and creating a soft, middle-parted fringe. 
	After colouring/toning the hair, I then cut and styled it, without allowing her to look in the mirror throughout the process. <br>When she finally saw herself with the new colour and style, she began to cry as she loved the change and was very pleased with the finished look. This gave me the most  satisfaction because although she did not really want the change, she trusted me enough and my judgment, which she was pleased with in the end.</dd>
	
	<dt>What do you think sets Paul Kemp Hairdressing apart from other salons?</dt>
	<dd>The respect that the staff have for their employers, It always seems a fun/enjoyable place to work and the stylists seem to really get on with one another which I think is really important when you are part of a team, as not many salons have that. The salon seems to always be encouraging staff to enter competitions which I think is really good. Clients know when there is a good atmosphere and that is the reason they go back to a salon.</dd>
	
	<dt>What are you looking forward to most when starting at PK?</dt>
	<dd>Building my client base, being part of a vibrant team again and learning new techniques/ideas from other stylists.</dd>
		
	<dt>Out of the product ranges which is your favourite and why?</dt>
	<dd>Tigi Bed Head. I use this myself at home, I think each product does exactly what it says, the value for money is good and there is a wide variety for hair types/styles.</dd>
	
	<dt>Is there a celebrity that inspires you? Who and why?</dt>
	<dd>Yes, Sienna Miller. She is a trend setter. She makes the effort to  keep in with latest trend but puts her own mark on them. She will alternate styles from glamorous to boho. She has her own signature look although she will try new looks.</dd>
	
	<dt>Do you have a signature hairstyle? If so, describe it.</dt>
	<dd>When doing gents, I have always enjoyed the 'indie style' haircuts. From having an interest in Indie music and the indie scene, I have always been keen to keep up with the latest trend. The cut that I would say was my  signature style would be the Paul Weller/Liam Gallagher mullet with a short cropped fringe, longer sideburns with heavily texturised layers on the crown. This is the cut that I enjoy the most and love doing.</dd>
	{{ Html::image('images/news_images/michelle_r_4.jpg', '') }}
	
	<dt>What pushes your buttons in the world of fashion,  hair and beauty?</dt>
	<dd>I like new and quirky. If I see something original, that hasn't been done before, then I want to know everything about it and how to create it. I love learning new things and I am interested in ideas that have been thought of outside the box.</dd>
</dl>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-02">2<sup>nd</sup> August 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="WorldRelease" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/world_release.jpg', '') }}
<h3>Tigi World Release</h3>
<p><strong>Last month members of the PK team headed down to London along with members of the Jakata team to be a part of Tigi's massive event - World Release 2013 at Old Billingsgate Market.</strong></p>
<p>It was a spectacular showcase of all things Tigi, with live demonstrations and runway shows. We were lucky enough to get a sneak peak back stage to see the stylists prepping the models for the show&hellip;</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>The alcohol was free flowing and the aftershow party in the basement, with Tigi global creative director Nick Irwin on the decks, ended the night on a high.</p>
<p class="offer"><a href="https://www.facebook.com/media/set/?set=a.10151718362566866.1073741825.62812381865&type=3" target="_blank">To check out pictures from the night, and see the team get progressively more drunk click here.</a></p>
<a href="http://www.tigiprofessional.com/en-gb/about/news/worldrelease2013" target="_blank"><p>Visit the Tigi site to see videos of the event</p></a>
<p class="offer_heading"></p>
<p class="offer"></p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-01">2<sup>nd</sup> August 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="ghdWinner" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/ghd_candy.jpg', '') }}
<h3>Competition Winner</h3>
<p><strong>Last month we ran a competition to give you the chance to win a set of GHD candy Collection Styling irons. We were inundated with applicants, but we can have only one lucky winner!</strong></p>
<p></p>
<p class="reveal">The winner is&hellip; (click here)</p>
</section> <!--end .visible-->
<section class="hidden">
<p class="offerHeading">Lisa McNamara</p>
<p class="offer">Congratulations Lisa, we'll be contacting you shortly!</p>
<p>We'll be launching another great competition soon - keep an eye out on our <a href="https://www.facebook.com/PaulKempHairdressing">Facebook page</a></p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-01">2<sup>nd</sup> August 2013</time>
</article> <!--end #article-->


<article class="article">
<a id="collection" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/collection_1.jpg', '') }}
<h3>PK Artistic Team produces new collection</h3>
<p><strong>Earlier this year the Paul Kemp artistic team got together to put together their first collection.</strong></p>
<p>The brief was to create a set of images that would showcase the talent of the team plus represent the style of the salon. After weeks of preparation the models were booked and the outfits bought. The photo shoot went smoothly and eight beautiful looks were created.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/collection_2.jpg', '') }}
<p>Salon manager Kelly said "It was a fantastic day, the whole team   pulled together and we're really happy with the final result. I can't wait for them to be released"</p>
<p>The images will be used for marketing materials and a selection will be on show in the salon.</p>
<p class="offer">We'll be posting the full collection soon here on our w
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-08-02">2<sup>nd</sup> August 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="grad2" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/meg.jpg', '') }}
<h3>The Graduate</h3>
<p><strong>Training to be a hairdresser is no walk in the park! Years of intensive training, blood, sweat and tears, plus being bottom of the pecking order isn't much fun either! But it all becomes worthwhile when you get handed your certificate and you're promoted to the next level. Washing a hundred heads of hair a day soon becomes a distant memory!</strong></p>
<p>Megan Mullaney (image left) know's how this feels as she recently got promoted to Graduate stylist here in the salon.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/tash_new.jpg', '') }}
<p>Meg follows in the footsteps of Natasha Bailey (see pic on left) (who qualified about a year ago and has now built a well established client base). It's always great to produce home grown talent, to see someone start out, barely able to hold their scissors and  comb properly, to becoming a talented, skilful stylist.</p>
<p>Megan said <em>"My time training in the salon was really rewarding, it went so fast and I can't believe I'm on the shop floor now. I'm really eager to build up my client's and get busier and busier. You never stop learning as a hairdresser, I'm looking forward to learning more advanced techniques and skills."</em></p>
<p>Our latest apprentice, Ben Morris, recently started full time after helping out a few days a week whilst still at school. The standards set by Meg and Tash are high but we're confident he'll produce the goods too!</p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-01">1<sup>st</sup> August 2013</time>
</article> <!--end #article-->


</section> <!--end #accoordion-->
{{ Html::link('oldnews', "Click here for older news stories&hellip;", array('class' => 'newslink')) }}
</section> <!--newspage-->

@stop