<?php

use PHPUnit\Framework\TestCase;

require_once "app.php";
require_once __DIR__ . '/../app/models/Topic.php';

class TopicTest extends TestCase
{
    private $pdo;
    private $topic;

    protected function setUp(): void
    {
        $this->pdo = $this->createMock(PDO::class);
        $this->topic = new Topic();
        $this->topic->pdo = $this->pdo;
    }

    public function testGet()
    {
        $stmt = $this->createMock(PDOStatement::class);
        $stmt->expects($this->once())
             ->method('execute')
             ->willReturn(true);

        $this->pdo->expects($this->once())
                  ->method('prepare')
                  ->with('SELECT * FROM topics ORDER BY posted_at DESC LIMIT 5;')
                  ->willReturn($stmt);

        $result = $this->topic->get();
        $this->assertTrue($result);
    }

    public function testFindById()
    {
        $stmt = $this->createMock(PDOStatement::class);
        $stmt->expects($this->once())
             ->method('execute')
             ->with(['id' => 1])
             ->willReturn(true);

        $this->pdo->expects($this->once())
                  ->method('prepare')
                  ->with('SELECT * FROM topics WHERE id = :id;')
                  ->willReturn($stmt);

        $result = $this->topic->findById(1);
        $this->assertTrue($result);
    }

    public function testInsert()
    {
        $stmt = $this->createMock(PDOStatement::class);
        $stmt->expects($this->once())
             ->method('execute')
             ->with([
                 'title' => 'Sample Title',
                 'posted_at' => '2024-07-08 00:00:00',
                 'is_published' => 1,
                 'writer_id' => 1,
                 'summary' => 'Sample Summary',
                 'content' => 'Sample Content',
                 'image_name' => 'sample.jpg'
             ])
             ->willReturn(true);

        $this->pdo->expects($this->once())
                  ->method('prepare')
                  ->with('INSERT INTO topics 
                    (title, posted_at, is_published, writer_id, summary, content, image_name)
                    VALUES (:title, :posted_at, :is_published, :writer_id, :summary, :content, :image_name);')
                  ->willReturn($stmt);

        $result = $this->topic->insert([
            'title' => 'Sample Title',
            'posted_at' => '2024-07-08 00:00:00',
            'is_published' => 1,
            'writer_id' => 1,
            'summary' => 'Sample Summary',
            'content' => 'Sample Content',
            'image_name' => 'sample.jpg'
        ]);
        $this->assertTrue($result);
    }

    public function testUpdate()
    {
        $stmt = $this->createMock(PDOStatement::class);
        $stmt->expects($this->once())
             ->method('execute')
             ->with([
                 'id' => 1,
                 'title' => 'Updated Title',
                 'posted_at' => '2024-07-08 00:00:00',
                 'is_published' => 1,
                 'category_id' => 2,
                 'writer_id' => 1,
                 'summary' => 'Updated Summary',
                 'content' => 'Updated Content',
                 'image_name' => 'updated.jpg'
             ])
             ->willReturn(true);

        $this->pdo->expects($this->once())
                  ->method('prepare')
                  ->with('UPDATE topics SET 
                    title = :title,
                    posted_at = :posted_at,
                    is_published = :is_published,
                    category_id = :category_id,
                    writer_id = :writer_id,
                    summary = :summary,
                    content = :content,
                    image_name = :image_name
                WHERE id = :id;')
                  ->willReturn($stmt);

        $result = $this->topic->update([
            'id' => 1,
            'title' => 'Updated Title',
            'posted_at' => '2024-07-08 00:00:00',
            'is_published' => 1,
            'category_id' => 2,
            'writer_id' => 1,
            'summary' => 'Updated Summary',
            'content' => 'Updated Content',
            'image_name' => 'updated.jpg'
        ]);
        $this->assertTrue($result);
    }
}