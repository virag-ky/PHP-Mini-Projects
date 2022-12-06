<?php

function magic8Ball() {
  echo "What is your question?" . "\n";
  $question = readline(">> ");
  echo "Your question is: $question" . "\n";

  $random_num = rand(0, 19);

  switch($random_num) {
    case 0:
    print "It is certain.";
    break;
    case 1:
    print "It is decidedly so.";
    break;
    case 2:
    print "Without a doubt.";
    case 3:
    print "Yes - definitely.";
    break;
    case 4:
    print "You may rely on it.";
    break;
    case 5: 
    print "As I see it, yes.";
    break;
    case 6:
    print "Most likely.";
    break;
    case 7:
    print "Outlook good.";
    break;
    case 8:
    print "Yes.";
    break;
    case 9:
    print "Signs point to yes.";
    break;
    case 10:
    print "Reply hazy, try again.";
    break;
    case 11:
    print "Ask again later.";
    break;
    case 12:
    print "Better not tell you now.";
    break;
    case 13:
    print "Cannot predict now.";
    break;
    case 14:
    print "Concentrate and ask again.";
    break;
    case 15:
    print "Don't count on it.";
    break;
    case 16:
    print "My reply is no.";
    break;
    case 17:
    print "My sources say no.";
    break;
    case 18:
    print "Outlook not so good.";
    break;
    case 19:
    print "Very doubtful.";
    break;
  }
};

echo magic8Ball();