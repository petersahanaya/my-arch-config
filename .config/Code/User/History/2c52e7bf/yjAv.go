package slice

import (
	cli "day_1/internal/cli"
)

func Find(movies *[]cli.Movie, fn func(name string) bool) []cli.Movie {
	var results []cli.Movie
	for _, movie := range *movies {
		if fn(movie.Name) {
			results = append(results, movie)
		}
	}

	return results
}
