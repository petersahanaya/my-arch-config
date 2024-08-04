package slice

import (
	. "day_1/internal/cli"
)

func Find(movies *[]Movie, fn func(name string) bool) []Movie {
	var results []Movie
	for _, movie := range *movies {
		if fn(movie.Name) {
			results = append(results, movie)
		}
	}

	return results
}
