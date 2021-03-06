<!-- DO NOT EDIT THIS FILE! -->
<!-- Instead edit contrib/hangouts.php -->
<!-- Then run bin/docgen -->

# hangouts

[Source](/contrib/hangouts.php)


Require the Google Hangouts Chat recipe in your `deploy.php` file:

```php
require 'contrib/chat.php';
```

Add hook on deploy:

```php
before('deploy', 'chat:notify');
```

## Configuration

- `chat_webhook` – chat incoming webhook url, **required**
- `chat_title` – the title of your notification card, default `{{application}}`
- `chat_subtitle` – the subtitle of your card, default `{{hostname}}`
- `chat_favicon` – an image for the header of your card, default `http://{{hostname}}/favicon.png`
- `chat_line1` – first line of the text in your card, default: `{{branch}}`
- `chat_line2` – second line of the text in your card, default: `{{stage}}`

## Usage

If you want to notify only about beginning of deployment add this line only:

```php
before('deploy', 'chat:notify');
```

If you want to notify about successful end of deployment add this too:

```php
after('deploy:success', 'chat:notify:success');
```

If you want to notify about failed deployment add this too:

```php
after('deploy:failed', 'chat:notify:failure');
```



* Config
  * [`chat_title`](#chat_title)
  * [`chat_subtitle`](#chat_subtitle)
  * [`favicon`](#favicon)
  * [`chat_line1`](#chat_line1)
  * [`chat_line2`](#chat_line2)
* Tasks
  * [`chat:notify`](#chatnotify) — Notifying Google Hangouts Chat
  * [`chat:notify:success`](#chatnotifysuccess) — Notifying Google Hangouts Chat about deploy finish
  * [`chat:notify:failure`](#chatnotifyfailure)

## Config
### chat_title
[Source](https://github.com/deployphp/deployer/search?q=%22chat_title%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)

Title of project

### chat_subtitle
[Source](https://github.com/deployphp/deployer/search?q=%22chat_subtitle%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)



### favicon
[Source](https://github.com/deployphp/deployer/search?q=%22favicon%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)

If 'favicon' is set Google Hangouts Chat will decorate your card with an image.

### chat_line1
[Source](https://github.com/deployphp/deployer/search?q=%22chat_line1%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)

Deploy messages

### chat_line2
[Source](https://github.com/deployphp/deployer/search?q=%22chat_line2%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)




## Tasks
### chat:notify
[Source](https://github.com/deployphp/deployer/search?q=%22chat%3Anotify%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)



### chat:notify:success
[Source](https://github.com/deployphp/deployer/search?q=%22chat%3Anotify%3Asuccess%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)



### chat:notify:failure
[Source](https://github.com/deployphp/deployer/search?q=%22chat%3Anotify%3Afailure%22+in%3Afile+language%3Aphp+path%3Acontrib+filename%3Ahangouts.php)



