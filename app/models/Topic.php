<?php
class Topic extends Model
{
    public string $table_name = "topics";

    public function get($limit = 5)
    {
        $sql = "SELECT * FROM {$this->table_name} ORDER BY posted_at DESC LIMIT {$limit};";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute();
        return $result;
    }

    public function findById($id)
    {
        $posts['id'] = $id;
        $sql = "SELECT * FROM {$this->table_name} WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($posts);
        return $result;
    }
    
    public function insert($posts)
    {
        $sql = "INSERT INTO {$this->table_name} 
                    (title, posted_at, is_published, writer_id, summary, content, image_name)
                    VALUES (:title, :posted_at, :is_published, :writer_id, :summary, :content, :image_name);";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($posts);
        return $result;
    }

    public function update($posts)
    {
        $sql = "UPDATE {$this->table_name} SET 
                    title = :title,
                    posted_at = :posted_at,
                    is_published = :is_published,
                    category_id = :category_id,
                    writer_id = :writer_id,
                    summary = :summary,
                    content = :content,
                    image_name = :image_name,
                WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($posts);
        return $result;
    }
}
