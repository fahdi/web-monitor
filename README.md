# Website Monitoring Script

This PHP script is designed to monitor the status of a specific website by checking its HTTP response code. It's a simple tool that can be used to ensure that your website is up and running.

## Features

- Uses `cURL` to make HTTP requests.
- Checks the HTTP response code of a specified URL.
- Outputs the status of the website based on the HTTP response code.

## Requirements

- PHP with `cURL` support.

## Installation

1. Download or clone this repository to your desired directory.
2. Ensure that PHP is installed on your system and that `cURL` is enabled.

## Usage

To use the script, simply run it from the command line or set it up on your server:

```
php index.php
```

You can also set up a cron job to run this script periodically.

## Configuration

Modify the `$url` variable in the script to point to the website you want to monitor.

```php
$url = "https://www.yourwebsite.com";
```

## Output

The script will output a message indicating whether the website is up or down, along with the HTTP response code.

- If the website is up and running, you will see a message like: "Website is up and running. Response Code: 200"
- If there's an issue, you'll see a message like: "Website might be down! Response Code: 500"

## Customization

You can modify the script to include additional features, such as email notifications, logging, or handling different HTTP response codes in specific ways.
