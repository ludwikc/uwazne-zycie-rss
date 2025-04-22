<?php
/**
 * Meditation RSS Feed Updater
 * 
 * This script should be set up to run daily via a cron job to update the
 * "lastBuildDate" in your RSS feed, ensuring MailerLite detects changes
 * and sends out notifications for upcoming meditations.
 * 
 * Recommended cron schedule: 0 0 * * * php /path/to/update-meditation-feed.php
 * (This runs the script at midnight every day)
 */

// Simply touch the RSS feed file to update its modification time
$feedPath = __DIR__ . '/meditation-rss.php';

if (file_exists($feedPath)) {
    // Update the file's modification time
    touch($feedPath);
    
    // Optionally, make a real HTTP request to your RSS feed URL to ensure it's cached properly
    $feedUrl = 'https://tech.siadlak.com/meditation-rss.php'; // Change this to your actual URL
    file_get_contents($feedUrl);
    
    echo "Meditation RSS feed updated successfully at " . date('Y-m-d H:i:s') . "\n";
} else {
    echo "Error: Meditation RSS feed file not found at {$feedPath}\n";
}
