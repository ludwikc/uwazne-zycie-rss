<?php
// Configuration
$feedTitle = "Uważne Życie: Medytacje Prowadzone";
$feedDescription = "Nadchodzące sesje medytacyjne";
$feedUrl = "https://uwaznezycie.pl"; // Change to your actual website URL
$zoomLink = "https://discord.com/channels/428530875085619200/988452597549641758"; // Change to your actual Zoom link
$meditationTime = "6:30"; // Change to your actual meditation time

// Meditation data
$meditations = [
    ['date' => '2024-04-29', 'title' => 'Uwolnienie i przestrzeń na nowe', 'description' => 'Medytacja na długi weekend majowy: Ćwiczenia wspierające odpuszczenie zbędnych obciążeń i otwarcie się na nowe doświadczenia.'],
    ['date' => '2024-05-06', 'title' => 'Siła cierpliwości', 'description' => 'Medytacja na rozwijanie cierpliwości i spokoju: Praktyki wspierające akceptację długotrwałych procesów.'],
    ['date' => '2024-05-13', 'title' => 'Harmonia ciała i umysłu', 'description' => 'Medytacja łącząca świadomość oddechu, ciała i umysłu: Ćwiczenia rozwijające pełną integrację ciała.'],
    ['date' => '2024-05-20', 'title' => 'Znalezienie życiowej pasji', 'description' => 'Medytacja na odkrywanie i rozwój swoich pasji: Praktyki wspierające kontakt z wewnętrznym entuzjazmem.'],
    ['date' => '2024-05-27', 'title' => 'Głębszy relaks i regeneracja', 'description' => 'Medytacja wspierająca stan głębokiego odpoczynku: Ćwiczenia relaksacyjne poprawiające jakość snu.'],
    ['date' => '2024-06-03', 'title' => 'Skupienie i koncentracja', 'description' => 'Medytacja na poprawę efektywności i koncentracji: Praktyki rozwijające zdolność do głębokiego skupienia.'],
    ['date' => '2024-06-10', 'title' => 'Odwaga w podejmowaniu decyzji', 'description' => 'Medytacja na rozwój pewności w swoich wyborach: Ćwiczenia wspierające wewnętrzną siłę do podejmowania decyzji.'],
    ['date' => '2024-06-17', 'title' => 'Praktyka wdzięczności', 'description' => 'Codzienne praktyki mindfulness na dostrzeganie piękna i obfitości w życiu.'],
    ['date' => '2024-06-24', 'title' => 'Kreatywność i otwartość umysłu', 'description' => 'Medytacja na usuwanie blokad twórczych: Praktyki rozwijające otwartość na nowe pomysły.'],
    ['date' => '2024-07-01', 'title' => 'Budowanie samodyscypliny', 'description' => 'Medytacja na wzmacnianie siły wewnętrznej: Praktyki rozwijające konsekwencję i wytrwałość.'],
    ['date' => '2024-07-08', 'title' => 'Rozwijanie intuicji', 'description' => 'Medytacja na słuchanie wewnętrznego głosu: Ćwiczenia wspierające zaufanie do swojej intuicji.'],
    ['date' => '2024-07-15', 'title' => 'Redukcja lęku i napięcia', 'description' => 'Medytacja na uwalnianie od lęków i niepokoju: Praktyki oddechowe i uważnościowe.'],
    ['date' => '2024-07-22', 'title' => 'Balans energii w codziennym życiu', 'description' => 'Medytacja na zarządzanie energią i unikanie wypalenia.'],
    ['date' => '2024-07-29', 'title' => 'Głębsza samoakceptacja', 'description' => 'Medytacja na akceptację siebie w całości: Praktyki rozwijające miłość własną.'],
    ['date' => '2024-08-05', 'title' => 'Pogłębianie empatii', 'description' => 'Medytacja na zrozumienie i współodczuwanie z innymi.'],
    ['date' => '2024-08-12', 'title' => 'Harmonia emocjonalna', 'description' => 'Ćwiczenia mindfulness wspierające równowagę emocji i wewnętrzny spokój.'],
    ['date' => '2024-08-19', 'title' => 'Uwalnianie blokad twórczych', 'description' => 'Medytacja na otwieranie się na kreatywność i przepływ.'],
    ['date' => '2024-08-26', 'title' => 'Uważność w pracy', 'description' => 'Medytacja na poprawę koncentracji i efektywności zawodowej.'],
    ['date' => '2024-09-02', 'title' => 'Odwaga w pokonywaniu ograniczeń', 'description' => 'Medytacja wspierająca przekraczanie własnych barier.'],
    ['date' => '2024-09-09', 'title' => 'Znalezienie wewnętrznego spokoju', 'description' => 'Praktyki na utrzymanie spokoju w obliczu stresu.'],
    ['date' => '2024-09-16', 'title' => 'Zarządzanie gniewem', 'description' => 'Medytacja na akceptację i wyrażanie trudnych emocji.'],
    ['date' => '2024-09-23', 'title' => 'Cykl zmian i odpuszczanie', 'description' => 'Medytacja na pierwszy dzień jesieni: Praktyki symbolizujące akceptację przemijania i otwarcie na nowy cykl.'],
    ['date' => '2024-09-30', 'title' => 'Życie w teraźniejszości', 'description' => 'Medytacja na głęboką obecność tu i teraz.'],
    ['date' => '2024-10-07', 'title' => 'Praktyka życzliwości', 'description' => 'Medytacja na rozwijanie dobroci wobec siebie i innych.'],
    ['date' => '2024-10-14', 'title' => 'Uwalnianie się od przeszłości', 'description' => 'Medytacja na odpuszczanie dawnych urazów i doświadczeń.'],
    ['date' => '2024-10-21', 'title' => 'Wewnętrzna siła i odporność', 'description' => 'Praktyki na wzmacnianie odporności psychicznej.'],
    ['date' => '2024-10-28', 'title' => 'Przyjmowanie krytyki z wdziękiem', 'description' => 'Medytacja na rozwój elastyczności emocjonalnej.'],
    ['date' => '2024-11-04', 'title' => 'Skupienie i koncentracja', 'description' => 'Medytacje wspierające produktywność.'],
    ['date' => '2024-11-11', 'title' => 'Wewnętrzna wolność', 'description' => 'Medytacja z okazji Święta Niepodległości: Praktyki rozwijające poczucie wewnętrznej wolności.'],
    ['date' => '2024-11-18', 'title' => 'Przezwyciężanie prokrastynacji', 'description' => 'Medytacja na zwiększenie motywacji.'],
    ['date' => '2024-11-25', 'title' => 'Otwartość na zmiany', 'description' => 'Medytacja na akceptację nowości w życiu.'],
    ['date' => '2024-12-02', 'title' => 'Budowanie relacji rodzinnych', 'description' => 'Medytacja na zrozumienie i głębszą więź z rodziną.'],
    ['date' => '2024-12-09', 'title' => 'Wewnętrzna motywacja', 'description' => 'Ćwiczenia na odkrycie własnych źródeł motywacji.'],
    ['date' => '2024-12-16', 'title' => 'Życzliwość wobec siebie', 'description' => 'Praktyki na rozwijanie miłości własnej.'],
    ['date' => '2024-12-23', 'title' => 'Święta z uważnością', 'description' => 'Medytacja na pełne doświadczenie świąt Bożego Narodzenia.'],
    ['date' => '2024-12-30', 'title' => 'Refleksja nad rokiem', 'description' => 'Medytacja na podsumowanie roku i wyznaczenie intencji na nowy etap.']
];

// Helper function to get current and upcoming meditations
function getRelevantMeditations($meditations) {
    $today = new DateTime();
    $relevantMeditations = [];
    
    foreach ($meditations as $meditation) {
        $meditationDate = new DateTime($meditation['date']);
        
        // Calculate publication date (1 day before the meditation)
        $pubDate = clone $meditationDate;
        $pubDate->modify('-1 day');
        
        // Include only meditations where publication date is today or in the past
        // This way, only published meditations appear in the feed
        if ($pubDate <= $today) {
            $meditation['pubDate'] = $pubDate;
            $meditation['meditationDate'] = $meditationDate;
            $relevantMeditations[] = $meditation;
        }
    }
    
    // Sort by date, newest first
    usort($relevantMeditations, function($a, $b) {
        return $b['meditationDate'] <=> $a['meditationDate'];
    });
    
    // Limit to the most recent 5 meditations
    return array_slice($relevantMeditations, 0, 5);
}

// Start building the RSS XML
header('Content-Type: application/rss+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
    <title><?php echo htmlspecialchars($feedTitle); ?></title>
    <description><?php echo htmlspecialchars($feedDescription); ?></description>
    <link><?php echo htmlspecialchars($feedUrl); ?></link>
    <atom:link href="https://tech.siadlak.com/meditation-rss.php" rel="self" type="application/rss+xml" />    <language>pl-pl</language>
    <lastBuildDate><?php echo date('r'); ?></lastBuildDate>

<?php
// Get meditations that should appear in the feed (published today or earlier)
$relevantMeditations = getRelevantMeditations($meditations);

foreach ($relevantMeditations as $meditation) {
    // Format the meditation date for display
    $formattedDate = $meditation['meditationDate']->format('l, j F Y');
    
    // Create HTML content for the item
    $itemContent = '
<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px;">
    <h2 style="color: #5b21b6; text-align: center; margin-bottom: 20px;">'. htmlspecialchars($meditation['title']) .'</h2>
    
    <p style="color: #4b5563; font-size: 16px; line-height: 1.6; margin-bottom: 25px;">
        '. htmlspecialchars($meditation['description']) .'
    </p>
    
    <div style="background-color: #ede9fe; padding: 15px; border-radius: 6px; margin-bottom: 25px;">
        <p style="margin: 0; color: #4c1d95; font-weight: bold;">📅 Data: '. $formattedDate .'</p>
        <p style="margin: 5px 0 0; color: #4c1d95; font-weight: bold;">🕗 Godzina: '. $meditationTime .'</p>
    </div>
    
    <div style="text-align: center;">
        <a href="'. htmlspecialchars($zoomLink) .'" style="display: inline-block; background-color: #8b5cf6; color: white; text-decoration: none; padding: 12px 30px; border-radius: 4px; font-weight: bold; text-align: center;">Dołącz do medytacji</a>
    </div>
    
    <p style="color: #6b7280; font-size: 14px; text-align: center; margin-top: 25px;">
        Do zobaczenia na wspólnej medytacji!
    </p>
</div>';

    // Add the item to the RSS feed
    ?>
    <item>
        <title><?php echo htmlspecialchars($meditation['title']) . ' - ' . $formattedDate; ?></title>
        <description><![CDATA[<?php echo $itemContent; ?>]]></description>
        <link><?php echo htmlspecialchars($zoomLink); ?></link>
        <guid isPermaLink="false"><?php echo htmlspecialchars($feedUrl) . '/meditation-' . $meditation['date']; ?></guid>
        <pubDate><?php echo $meditation['pubDate']->format('r'); ?></pubDate>
    </item>
<?php
}
?>
</channel>
</rss>