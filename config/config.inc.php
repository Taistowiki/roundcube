<?php
/* Local configuration for Roundcube Webmail */

//Tietokantaan yhdistäminen DSN luku ja kirjoittavalla operaattorilla. 
//Kirjoitetaan muodossa (Tuetaan PEAR MDB2): db_provider://user:password@host/database. 
//Lisää esimerkkejä: http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php. 
//Tuetaan [[Mysql]], Pgsql, sqlite, mssql ja sqlsrv. 
//Huomaathan että Sqlite käyttää absoluuttista polkua: sqlite:////full/path/to/sqlite.db?mode=0646

$config['db_dsnw'] = 'mysql://roundcube:password@localhost/roundcube';

//Määritä IMAP palvelimen verkko-osoite. 
//Jos jätät tyhjäksi niin kirjautumisen yhteydessä kysytään kirjautumisen palvelinta. 
//Array funktiolla saat siihen listan eri sähköpostipalvelimista jonne voi kirjautua. 
//SSL/TLS yhteyksiin käytä etuliitettä ssl:// tai tls://.

//Voit käyttää seuraavia muuttujia:

//%n - isäntänimi ($_SERVER['SERVER_NAME'])
//%t - isäntämimi ilman ensimmäistä osaa
//%d - domain (http domain$_SERVER['HTTP_HOST'] ilman esimmäistä osaa)
//%s - domainin nimi jälkeen '@' sähköposti osoitteen palveluntarjoajan kirjautumisen näytössä

//Esimerkiksi: %n = mail.domain.tld, %t = domain.tld
 
$config['default_host'] = 'localhost';

//Määritä SMTP palvelimen verkko-osoite. Käyttäessä SSL/TLS yhteyttä, määritä isäntämimeen etuliite ssl:// tai TLS://.
//Jos jätät tyhjäksi, käytetään PHP mail() funktiota. 

//Voit käyttää seuraavia muuttujia:

//%h - Käyttäjän IMAP isäntänimi
//%n - isäntänimi ($_SERVER['SERVER_NAME'])
//%t - isäntämimi ilman ensimmäistä osaa
//%d - domain (http domain$_SERVER['HTTP_HOST'] ilman esimmäistä osaa)
//%z - IMAP domain (IMAP isäntänimi ilman ensimmäistä osaa)
 $config['smtp_server'] = 'localhost';

//Palveluntarjoajan verkko-osoite josta tämän palvelunkäyttäjät saavat apua Roundcuben käyttöön.
//Älä linkkaa roundcube.net verkkosivulle!

$config['support_url'] = '';

//Tämä avain kryptaa käyttäjän IMAP salasanan kun tallennetaan tietokantaan. Käytä vähintään 24 merkkiä.
$config['des_key'] = 'H=Mgd81+3Hn+VeKnU?h*bNX!';

//Lista lisäosista (plugins/ hakemistosta)
$config['plugins'] = array();
