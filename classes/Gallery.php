<?php
class Gallery {
    public static function getImages($category) {
        require_once 'Database.php';
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT filename, title, alt_text FROM gallery WHERE category = ? ORDER BY created_at DESC");
        $stmt->execute([$category]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function render($category) {
        $images = self::getImages($category);
        echo '<div class="grid grid-cols-1 md:grid-cols-3 gap-4">';
        foreach ($images as $img) {
            echo '<div><img src="/images/gallery/' . htmlspecialchars($category) . '/' . htmlspecialchars($img["filename"]) .
                 '" alt="' . htmlspecialchars($img["alt_text"]) . '" loading="lazy" class="rounded shadow"/></div>';
        }
        echo '</div>';
    }
}
?>
