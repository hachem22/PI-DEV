<?php

namespace App\Service;

use App\Repository\BlogRepository;
use DateTime;

class BlogStatistics
{
    private $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    // Total number of blog posts
    public function getTotalPosts(): int
    {
        return $this->blogRepository->count([]);
    }

    // Posts by category
    public function getPostsByCategory(): array
    {
        return $this->blogRepository->createQueryBuilder('b')
            ->select('b.category, COUNT(b.id) as postCount')
            ->groupBy('b.category')
            ->getQuery()
            ->getResult();
    }

    // Posts by author
    public function getPostsByAuthor(): array
    {
        return $this->createQueryBuilder('b')
            ->join('b.author', 'a') // Ensure 'author' matches the property name in Blog entity
            ->select('a.Email as author, COUNT(b.id) as postCount')
            ->groupBy('a.Email')
            ->getQuery()
            ->getResult();
    }



    // Monthly content growth
    public function getMonthlyGrowth(): array
    {
        return $this->blogRepository->createQueryBuilder('b')
            ->select("DATE_FORMAT(b.publishDate, '%Y-%m') as month, COUNT(b.id) as postCount")
            ->groupBy('month')
            ->orderBy('month')
            ->getQuery()
            ->getResult();
    }
}