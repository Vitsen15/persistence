<?php
$sess = $manager->openConnection(Doctrine_Db::getConnection("schema://username:password@hostname/database"));

// get connection state:
switch($sess):
    case Doctrine_Connection::STATE_BUSY:
        // multiple open transactions
    break;
    case Doctrine_Connection::STATE_ACTIVE:
        // one open transaction
    break;
    case Doctrine_Connection::STATE_CLOSED:
        // closed state
    break;
    case Doctrine_Connection::STATE_OPEN:
        // open state and zero open transactions
    break;
endswitch;

// getting database handler

$dbh = $sess->getDBH();

// flushing the connection
$sess->flush();


// print lots of useful info about connection:
print $sess;
?>
