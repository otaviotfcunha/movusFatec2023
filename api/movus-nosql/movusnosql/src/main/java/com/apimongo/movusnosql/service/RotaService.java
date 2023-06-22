package com.apimongo.movusnosql.service;



import com.apimongo.movusnosql.document.Rota;

import reactor.core.publisher.Flux;
import reactor.core.publisher.Mono;


public interface RotaService {
	
	Flux<Rota> findAll();
	Mono<Rota> findById(String id);
	Mono<Rota> save(Rota rota);
	
}
