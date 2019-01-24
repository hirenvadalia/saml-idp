# SAML 2.0 Identity Provider (IdP)

## Usage

```
docker run \
-p 8082:8082 \
-e SSP_SP_ENTITY_ID=http://app.example.com \
-e SSP_SP_ACS=http://localhost/simplesaml/module.php/saml/sp/saml2-acs.php/test-sp \
-e SSP_SP_SLS=http://localhost/simplesaml/module.php/saml/sp/saml2-logout.php/test-sp \
-d hirenvadalia/saml-idp
```

There are few static users configured in the IdP see authsources.php for more details.
However you can define your own users by mounting a configuration file:

```
-v /users.php:/var/www/config/authsources.php
```

You can access the SimpleSAMLphp web interface of the IdP under `http://localhost:8082/`. The admin password is `admin`.
