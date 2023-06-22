package com.apimongo.movusnosql.service;

import com.apimongo.movusnosql.document.Onibus;

import reactor.core.publisher.Flux;
import reactor.core.publisher.Mono;

public interface OnibusService {
	
	Flux<Onibus> findAll();
	Mono<Onibus> findById(String id);
	Mono<Onibus> save(Onibus onibus);
	
}
