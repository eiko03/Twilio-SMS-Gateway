# Twilio-SMS-Gateway
<hr>

## Prerequisite
### Install Twillio SDK
Install Twilio SDK by running
``` composer require twilio/sdk ```
<br> or you can manually edit <strong> composer.json </strong> <br>
 ``` {
    "require": {
        "twilio/sdk": "^6.0.1"
    }
}
```
Then run
``` composer update ```
<br>
Finally update .env file like following
 ``` 
TWILIO_ACCOUNT_SID= //your accunt sid
TWILIO_AUTH_TOKEN= //auth token
TWILIO_NUMBER= //ur bought number
```

