# Meditation RSS Automation System

A simple yet powerful system to automate weekly meditation notifications using RSS feeds and MailerLite.

## Overview

This project provides a solution for automatically sending email notifications about upcoming meditation sessions without manual intervention. By leveraging MailerLite's RSS campaign feature, this system sends timely notifications for scheduled meditation sessions throughout the year.

## Features

- **Dynamic RSS Feed**: Automatically publishes meditation details one day before each session
- **Seamless MailerLite Integration**: Works with MailerLite's built-in RSS campaign functionality
- **Pre-loaded Schedule**: Contains a full year of meditation sessions
- **Automatic Email Notifications**: Sends emails at 14:00 on Mondays
- **Customizable Email Templates**: Easily modify the HTML content for your branding
- **Low Maintenance**: Once set up, runs entirely on autopilot

## Files Included

- `meditation-rss.php` - The main RSS feed generator
- `update-meditation-feed.php` - Helper script to refresh the feed (for cron jobs)
- `meditation-rss-generator.html` - A tool to generate an RSS feed XML file (optional alternative)

## Setup Instructions

### 1. Server Requirements

- PHP 7.0 or higher
- Web server (Apache, Nginx, etc.)
- Access to set up cron jobs (recommended)

### 2. Installation

1. Upload the PHP scripts to your web server
2. Edit `meditation-rss.php` to update:
   - Your website URL
   - Your Zoom meeting link
   - The meditation time
   - Any customizations to the email design

```php
// Configuration
$feedTitle = "Cotygodniowe Medytacje";
$feedDescription = "Nadchodzące sesje medytacyjne";
$feedUrl = "https://uwaznezycie.pl"; // Change to your actual website URL
$zoomLink = "https://discord.com/channels/428530875085619200/988452597549641758"; // Change to your actual meeting link
$meditationTime = "6:30"; // Change to your actual meditation time
```

3. Ensure the PHP file is accessible via a web browser (e.g., `https://tech.siadlak.com/meditation-rss.php`)

### 3. Setting Up MailerLite

1. Log in to your MailerLite account
2. Create a new RSS campaign:
   - Go to Campaigns > Create Campaign > RSS Campaign
   - Enter your RSS feed URL (e.g., `https://tech.siadlak.com/meditation-rss.php`)
   - Set the campaign to send on Mondays at 14:00
   - Choose "Send only when new content is available"
   - Design your email template (or use the default RSS template)
   - Select your subscriber group
   - Review and activate the campaign

### 4. Setting Up Daily Updates (Recommended)

1. Edit `update-meditation-feed.php` to update the file paths and URLs:

```php
$feedPath = __DIR__ . '/meditation-rss.php';
$feedUrl = 'https://tech.siadlak.com/meditation-rss.php'; // Change this
```

2. Set up a daily cron job to run this script, for example:

```
0 0 * * * php /path/to/update-meditation-feed.php
```

This runs the script at midnight every day, ensuring the RSS feed's timestamp stays fresh.

## How It Works

1. The RSS feed contains all meditation sessions for the year
2. Each session has a "publication date" set to one day before the actual meditation
3. MailerLite only detects items that have been "published" (have a pubDate in the past)
4. When MailerLite finds a newly published item, it sends an email to your subscribers
5. The daily cron job updates the RSS feed's timestamp, ensuring MailerLite checks it regularly

## Customization

### Email Template

The email HTML template is defined in the `$itemContent` variable in `meditation-rss.php`. You can modify this HTML to match your branding and design preferences.

### Adding or Modifying Meditation Sessions

Meditation sessions are defined in the `$meditations` array in `meditation-rss.php`. Each entry follows this format:

```php
['date' => '2024-04-29', 'title' => 'Meditation Title', 'description' => 'Meditation description text.'],
```

To add or modify sessions, simply edit this array.

## Troubleshooting

### MailerLite Not Sending Emails

1. Check that your RSS feed is accessible (try opening it in a browser)
2. Verify that the RSS feed XML is valid
3. Ensure the "lastBuildDate" in the feed is being updated daily
4. Check that your MailerLite campaign is properly configured and active

### Testing the RSS Feed

To verify your RSS feed is working correctly:

1. Access the feed URL directly in your browser
2. Check that the XML is properly formatted
3. Verify that only upcoming meditations (with publication dates in the past) are included
4. Confirm that the next meditation appears in the feed

## Alternative: Static RSS File

If you prefer not to use PHP or don't have access to a PHP server, you can use the included HTML tool (`meditation-rss-generator.html`) to generate a static XML file:

1. Open the HTML file in your browser
2. Fill in your website and meditation details
3. Click "Generate RSS Feed"
4. Copy the generated XML and save it as `meditations.xml` on your server
5. Update this file manually or through a script as needed

## License

This project is free to use for any purpose. Attribution is appreciated but not required.

## Support

For questions or support, please open an issue on GitHub or contact the project maintainer.
