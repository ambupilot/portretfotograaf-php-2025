<?php
class Page {
    public $title;
    public $description;
    public $ogImage;
    public $content;

    public function __construct($slug = 'index') {
        require_once 'Database.php';
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM pages WHERE slug = ?");
        $stmt->execute([$slug]);
        $page = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->title = $page['title'] ?? 'Portret Fotograaf';
        $this->description = $page['description'] ?? '';
        $this->ogImage = $page['og_image'] ?? '/images/og/home.webp';
        $this->content = $page['content'] ?? '';
    }

    public function renderContent() {
        echo $this->content;
    }
}
?>
