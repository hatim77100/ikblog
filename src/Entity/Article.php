<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    

    private ?int $id = null;
    
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $main_img = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $secondary_img = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $thumbnail_img = null;
    
    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;
    
    #[ORM\Column(length: 1000)]
    private ?string $summary = null;
    
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $published_date = null;
    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $creation_date = null;
    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $update_date = null;
    
    #[ORM\Column]
    private ?bool $published = null;
    
    #[ORM\Column(nullable: true)]
    private ?float $total_rating = null;
    
    #[ORM\Column(nullable: true)]
    private ?int $rating_count = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    public function setTitle(string $title): self
    {
        $this->title = $title;
        
        return $this;
    }
    
    public function getMainImg(): ?string
    {
        return $this->main_img;
    }
    
    public function setMainImg(string $main_img): self
    {
        $this->main_img = $main_img;
        
        return $this;
    }
    
    public function getSecondaryImg(): ?string
    {
        return $this->secondary_img;
    }
    
    public function setSecondaryImg(?string $secondary_img): self
    {
        $this->secondary_img = $secondary_img;
        
        return $this;
    }
    
    public function getThumbnailImg(): ?string
    {
        return $this->thumbnail_img;
    }

    public function setThumbnailImg(?string $thumbnail_img): self
    {
        $this->thumbnail_img = $thumbnail_img;
        
        return $this;
    }
    
    public function getContent(): ?string
    {
        return $this->content;
    }
    
    public function setContent(string $content): self
    {
        $this->content = $content;
        
        return $this;
    }
    
    public function getSummary(): ?string
    {
        return $this->summary;
    }
    
    public function setSummary(string $summary): self
    {
        $this->summary = $summary;
        
        return $this;
    }
    
    public function getPublishedDate(): ?\DateTimeInterface
    {
        return $this->published_date;
    }

    public function setPublishedDate(?\DateTimeInterface $published_date): self
    {
        $this->published_date = $published_date;
        
        return $this;
    }
    
    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;
        
        return $this;
    }
    
    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }
    
    public function setUpdateDate(\DateTimeInterface $update_date): self
    {
        $this->update_date = $update_date;
        
        return $this;
    }
    
    public function isPublished(): ?bool
    {
        return $this->published;
    }
    
    public function setPublished(bool $published): self
    {
        $this->published = $published;
        
        return $this;
    }
    
    public function getTotalRating(): ?float
    {
        return $this->total_rating;
    }

    public function setTotalRating(?float $total_rating): self
    {
        $this->total_rating = $total_rating;
        
        return $this;
    }
    
    public function getRatingCount(): ?int
    {
        return $this->rating_count;
    }
    
    public function setRatingCount(?int $rating_count): self
    {
        $this->rating_count = $rating_count;
        
        return $this;
    }
 
}
