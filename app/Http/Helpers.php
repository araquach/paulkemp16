<?php

function getOffer($level, $gender)
{
    switch([$level, $gender]) {
        case ['G', 'F']:
            return '<span class="big">&pound;50<br></span>Colour &amp; Cut package';
            break;
        case ['S', 'F']:
            return '<span class="big">&pound;60<br></span>Colour &amp; Cut package';
            break;
        case ['SS', 'F']:
            return '<span class="big">&pound;70<br></span>Colour &amp; Cut package';
            break;
        case ['G', 'M']:
            return '<span class="big">&pound;10<br></span>Men\'s Cut &amp; Style';
            break;
        case ['S', 'M']:
            return '<span class="big">&pound;15<br></span>Men\'s Cut &amp; Style';
            break;
        case ['SS', 'M']:
            return '<span class="big">&pound;20<br></span>Men\'s Cut &amp; Style';
            break;
        default:
            return '<span class="big">&pound;30% off</span>';
    }
}

function getOffer2($level, $gender)
{
    switch([$level, $gender]) {
        case ['G', 'F']:
            return '<span class="big">&pound;50<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound25</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['S', 'F']:
            return '<span class="big">&pound;60<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound30</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['SS', 'F']:
            return '<span class="big">&pound;70<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound35</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['G', 'M']:
            return '<span class="big">&pound;10<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        case ['S', 'M']:
            return '<span class="big">&pound;15<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        case ['SS', 'M']:
            return '<span class="big">&pound;20<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        default:
            return '<span class="big">&pound;30% off</span><br> your next visit<br><em>PLUS:</em><br>a FREE product with each service you have';
    }
}

function getStylists($cut, $colour, $gender)
{
        if($gender == 'F')
        {
            $total = $cut + $colour;
        
            if($total < 2)
            {
                return "Layla Relf";
            }
            
            elseif($total >= 2 && $total < 4)
            {
                return "Laura Minett &amp; Matt Lane";
            }
            
            elseif($total >= 4 && $total < 6)
            {
                return "Laura Hall &amp; Vikki Rowland";
            }
            
            elseif($total >= 6  && $total < 6)
            {
                return "Natalie Doxey &amp; Jimmy Sharpe";
            }
            
            else
            {
                return "Caleb Barrie";
            }
        }
        
        elseif($gender == 'M')
        {
            if($cut <= 1)
            {
                return "Layla Relf - m";
            }
            
            elseif($cut > 1 && $cut <= 3)
            {
                return "Laura Minett &amp; Matt Lane - m";
            }
            
            elseif($cut > 3 && $cut <= 5)
            {
                return "Laura Minett &amp; Matt Lane - m";
            }
            
            elseif($cut > 5 && $cut <= 6)
            {
                return "Laura Hall &amp; Natalie Doxey - m";
            }
            
            else
            {
                return "Caleb Barrie - m";
            }
        }
}

function getTreatment($texture, $condition)
{
    if($texture == '')
}