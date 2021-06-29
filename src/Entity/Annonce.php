<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;

/**
* @ORM\Entity( repositoryClass = AnnonceRepository::class )
* @ORM\HasLifecycleCallbacks()
*/
class Annonce {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column( type = "integer" )
    */
    private $id;

    /**
    * @ORM\Column( type = "string", length = 50 )
    */
    private $title;

    /**
    * @ORM\Column( type = "string", length = 50 )
    */
    private $slug;

    /**
    * @ORM\Column( type = "text" )
    */
    private $description;

    /**
    * @ORM\Column( type = "datetime", length = 255 )
    */
    private $date;

    /**
    * @ORM\Column( type = "float" )
    */
    private $price;

    /**
    * @ORM\Column( type = "string", length = 255 )
    */
    private $adress;

    /**
    * @ORM\Column( type = "string", length = 255 )
    */
    private $image;

    /**
    * @ORM\Column( type = "string", length = 255 )
    */
    private $roms;

    /**
    * @ORM\Column( type = "boolean" )
    */
    private $isavailable;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="annonce", cascade={"persist", "remove"})
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="annonce", cascade={"persist", "remove"})
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $introduction;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle( string $title ): self {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string {
        return $this->slug;
    }

    public function setSlug( string $slug ): self {
        $this->slug = $slug;

        return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription( string $description ): self {
        $this->description = $description;

        return $this;
    }

    /**
    * @ORM\PrePersist
    * @ORM\PreUpdate
    */
    public function initSlug() {
        $sluger = new Slugify();
        $this->slug = $sluger->slugify( $this->title );
    }

    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
    * @ORM\PrePersist
    * @ORM\PreUpdate
    */
    public function setDate() {
        $this->date = new \DateTime();
    }

    public function getPrice(): ?float {
        return $this->price;
    }

    public function setPrice( float $price ): self {
        $this->price = $price;

        return $this;
    }

    public function getAdress(): ?string {
        return $this->adress;
    }

    public function setAdress( string $adress ): self {
        $this->adress = $adress;

        return $this;
    }

    public function getImage(): ?string {
        return $this->image;
    }

    public function setImage( string $image ): self {
        $this->image = $image;

        return $this;
    }

    public function getRoms(): ?string {
        return $this->roms;
    }

    public function setRoms( string $roms ): self {
        $this->roms = $roms;

        return $this;
    }

    public function getIsavailable(): ?bool {
        return $this->isavailable;
    }

    public function setIsavailable( bool $isavailable ): self {
        $this->isavailable = $isavailable;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setAnnonce($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getAnnonce() === $this) {
                $comment->setAnnonce(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setAnnonce($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getAnnonce() === $this) {
                $image->setAnnonce(null);
            }
        }

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }
}
