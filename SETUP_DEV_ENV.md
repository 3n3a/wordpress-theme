# Setup Development Environment

> How to setup

## Install Utilities

1. Install CLI's

    ```bash
    brew install php mkcert
    ```

2. Install `PHP_CodeSniffer`, etc.:

    ```bash
    cd ~/repos && git clone -b master --depth 1 https://github.com/squizlabs/PHP_CodeSniffer.git phpcs
    git clone -b master https://github.com/PHPCompatibility/PHPCompatibility
    git clone -b main --depth 1 https://github.com/WordPress/WordPress-Coding-Standards wpcs

    # works for macos only
    sudo ln -s /Users/$USER/repos/phpcs/bin/phpcs /usr/local/bin/phpcs
    sudo chmod +x /usr/local/bin/phpcs
    phpcs --config-set installed_paths "/Users/$USER/repos/wpcs","/Users/$USER/repos/PHPCompatibility"
    ```

2.1. Test installation:

    ```bash
    phpcs -i
    ```

3. Install `stylelint`, `eslint`:

    ```bash
    npm i stylelint eslint -g
    ```

3.1. Test installation:

    ```bash
    stylelint -v
    eslint -v
    ```

## Setup 

1. Generate localhost TLS-Certificates

    ```bash
    sudo mkdir -p /var/www/certs/
    cd /var/www/certs/
    sudo mkcert localhost $(hostname) $(ipconfig getifaddr en0) ::1

    # install in system root
    sudo mkcert -install

    # serve root ca for other devices
    python3 -m http.server -d "$(mkcert -CAROOT)"
    # 1. ios open <http://url:8000> in safari
    # 2. click on <rootCA.pem> and "allow"
    # 3. go to settings and install
    # 4. trust under General > About > Certificate Trust ...
    ```