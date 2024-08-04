package find

import (
	cli "day_1/internal/cli"
)

func Find(movies *[]cli.Movie, fn func(name string) bool) {
	var results []cli.Movie
	for _, movie := range *movies {
		if fn(movie.Name) {
			results = append(results, movie)
		}
	}
}
