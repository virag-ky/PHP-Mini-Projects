<?php

function magic8Ball() {
  echo "What is your question?" . "\n";
  $question = readline(">> ");
  echo "Your question is: $question" . "\n";

  $random_num = rand(0, 19);

  switch($random_num) {
    case 0:
    print "It is certain.\n";
    break;
    case 1:
    print "It is decidedly so.\n";
    break;
    case 2:
    print "Without a doubt.\n";
    break;
    case 3:
    print "Yes - definitely.\n";
    break;
    case 4:
    print "You may rely on it.\n";
    break;
    case 5: 
    print "As I see it, yes.\n";
    break;
    case 6:
    print "Most likely.\n";
    break;
    case 7:
    print "Outlook good.\n";
    break;
    case 8:
    print "Yes.\n";
    break;
    case 9:
    print "Signs point to yes.\n";
    break;
    case 10:
    print "Reply hazy, try again.\n";
    break;
    case 11:
    print "Ask again later.\n";
    break;
    case 12:
    print "Better not tell you now.\n";
    break;
    case 13:
    print "Cannot predict now.\n";
    break;
    case 14:
    print "Concentrate and ask again.\n";
    break;
    case 15:
    print "Don't count on it.\n";
    break;
    case 16:
    print "My reply is no.\n";
    break;
    case 17:
    print "My sources say no.\n";
    break;
    case 18:
    print "Outlook not so good.\n";
    break;
    case 19:
    print "Very doubtful.\n";
    break;
  }
};

magic8Ball();