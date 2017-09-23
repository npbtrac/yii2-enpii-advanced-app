###Using composer
- Under development version: `composer create-project -s dev --prefer-dist enpii/yii2-enpii-advanced-app  <project_name>`
- Stable release: `composer create-project enpii/yii2-enpii-advanced-app  <project_name>`

After downloading, new application will be set up in your local machine like following:

###Basic structure
- [__common__](#common) (folder storing common configs, libs ...)
- __uploads__ (folder contains all user permanent or temporary uploaded content)
- __backend__ (An application end for backend)
- __api__ (Application end for API)
- __frontend__ (Application end for frontend)
- __console__ (Application end to console)


#### <a name="common"></a>Common
- config (common config for all application ends)
    + common.php (common configs used in entire application)
    + common-env.php (configs on current environment, e.g. database, logging, caching... this file will not be indexed in version control system)
    + common-env.php.txt (a copy of `common-env.php` for sampling the file, need to be synced with the __common-env.php__ on development environment)
    + params-common.php (common params used in entire application)
    + params-common-env.php (common params used on a specific environment, e.g. smtp info, admin info ...)