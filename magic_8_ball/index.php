<?php

function magic8Ball() {
  echo "What is your question?" . "\n";
  $question = readline(">> ");
  echo "Your question is: $question" . "\n";

  $random_num = rand(0, 19);

  switch($random_num) {
    case 0:
    print "Answer: It is certain.\n";
    break;
    case 1:
    print "Answer: It is decidedly so.\n";
    break;
    case 2:
    print "Answer: Without a doubt.\n";
    break;
    case 3:
    print "Answer: Yes - definitely.\n";
    break;
    case 4:
    print "Answer: You may rely on it.\n";
    break;
    case 5: 
    print "Answer: As I see it, yes.\n";
    break;
    case 6:
    print "Answer: Most likely.\n";
    break;
    case 7:
    print "Answer: Outlook good.\n";
    break;
    case 8:
    print "Answer: Yes.\n";
    break;
    case 9:
    print "Answer: Signs point to yes.\n";
    break;
    case 10:
    print "Answer: Reply hazy, try again.\n";
    break;
    case 11:
    print "Answer: Ask again later.\n";
    break;
    case 12:
    print "Answer: Better not tell you now.\n";
    break;
    case 13:
    print "Answer: Cannot predict now.\n";
    break;
    case 14:
    print "Answer: Concentrate and ask again.\n";
    break;
    case 15:
    print "Answer: Don't count on it.\n";
    break;
    case 16:
    print "Answer: My reply is no.\n";
    break;
    case 17:
    print "Answer: My sources say no.\n";
    break;
    case 18:
    print "Answer: Outlook not so good.\n";
    break;
    case 19:
    print "Answer: Very doubtful.\n";
    break;
  }
};

magic8Ball();