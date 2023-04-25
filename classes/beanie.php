<?php
class Beanie
{
    const AVAILABLE_SIZES = ['S', 'M', 'L', 'XL'];
    const AVAILABLE_MATERIALS = ['laine', 'soie', 'coton', 'cachemire'];

    protected ?int $id;
    protected ?string $name;
    protected ?string $description;
    protected ?float $price = 0.0;
    protected ?string $image;
    protected ?array $sizes  = [];
    protected ?array $materials = [];



    public function getId(): ?int
    {
        return $this->id;
    }


    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }


    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }




    public function getPrice(): ?float
    {
        return $this->price;
    }


    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }


    public function getImage(): ?string
    {
        return $this->image;
    }


    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

	/**
	 * @return array|null
	 */
	public function getSizes(): ?array {
		return $this->sizes;
	}
	
	/**
	 * @param array|null $sizes 
	 * @return self
	 */
	public function setSizes(?array $sizes): self {
		$this->sizes = $sizes;
		return $this;
	}

	public function getMaterials(): ?array {
		return $this->materials;
	}
	
	public function setMaterials(?array $materials): self {
		$this->materials = $materials;
		return $this;
	}
}

?>