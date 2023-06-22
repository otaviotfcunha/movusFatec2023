package com.apimongo.movusnosql.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.apimongo.movusnosql.document.Rota;
import com.apimongo.movusnosql.repository.RotaRepository;

import reactor.core.publisher.Flux;
import reactor.core.publisher.Mono;

@Service
public class RotaServiceImpl implements RotaService {
	
	@Autowired
	private RotaRepository rotaRepo;
	
	@Override
	public Flux<Rota> findAll() {
		return rotaRepo.findAll();
	}

	@Override
	public Mono<Rota> findById(String id) {
		return rotaRepo.findById(id);
	}

	@Override
	public Mono<Rota> save(Rota rota) {
		return rotaRepo.save(rota);
	}

}
