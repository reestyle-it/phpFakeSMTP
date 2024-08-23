# phpFakeSMTP - Laravel based

This is my effort to create a simple, yet configurable tool for testing email.

---

Tools used:
- [Laravel](https://laravel.com/)
- [Livewire](https://livewire.laravel.com/)
- [Power-tools Powergrid (livewire)](https://livewire-powergrid.com/)
- [BlackyTay/Fake-PHP-SMTP-Server](https://github.com/BlackyTay/Fake-PHP-SMTP-Server)

Goals are to make it work using:
- [Laravel Herd](https://herd.laravel.com/)
- [Vagrant](https://www.vagrantup.com/) / [VirtualBox](https://virtualbox.org/)
- [Docker](https://docker.com/)

---

## Why phpFakeSMTP?

Also: Why ANOTHER FakeSMTP library?

There are all kinds of paid "fake SMTP" versions that work really well, but it's hard to find 
a free version that works really well. I thought: MAYBE there is a way to create a PHP version
that works like a paid version, but is free and solely PHP based.

It doesnt have to be a full-blown SMTP implementation, but it should be able to receive emails
sent by an "unsecure" port. 

So basically it only needs to support "unsecure" sending of emails. It doesn't necessarily have to
support STARTTLS or other "secure" transmission: It doesn't send anything, it only receives.

## Collaborators are needed

I probably can't do this entirely on my own. My knowledge of SMTP is only basic. Everything else 
regarding PHP I can do.

Also, creating a runner in PHP may be a challenge. Also to kill an instance. 

## Why on Laravel?

I like Laravel. Though there is a lot of overhead, it just provides a lot of functionality through
its basic installation. And there are too many tools all created (ready) for Laravel. So yes,
Laravel.

---

## What it should do

### Create a runner instance

A runner instance is started and should keep running until it is stopped. If it has crashed,
it should be restarted.

So there should be some kind of monitoring that checks if it is still alive.

You should also be able to start and stop the runner manually.

### Storing emails

All emails should be stored in a database (SQLite or MySQL). This should be configurable so
one can apply ones needs and wishes.

Probably an `.env` setting like `FAKE_SMTP_STORAGE=[database|file]` and other necessary
configuration items. 

If the user pick `database` a form of database, it should pick up the `DB_*`. Fields in the
database should be chosen in a way that it contains all valuable information. E.g. storing
an IP should not considered very useful, though possible.

If the user picks `file` the folder it defaults to should be `[project]/storage/data/mails`. It
also should create a mapping, database-like file so you don't have to parse all the email files. 

### Reading emails

Preferable this is a 1/3-2/3 grid/detail page. The email content, however, should probably be
opened in an IFRAME to prevent the content messing up the view you are viewing.

#### Email grid

The email overview should be presented through a designated 'grid' area (see PowerGrid).

#### Email details

A designated 'read' area should show all the information regarding the email. This should 
preferably be a self-updating page through Livewire: Click fires event, event updates page. In
Livewire this behaviour should be .

