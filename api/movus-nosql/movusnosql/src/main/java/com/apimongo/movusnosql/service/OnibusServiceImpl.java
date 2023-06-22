package com.apimongo.movusnosql.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.apimongo.movusnosql.document.Onibus;
import com.apimongo.movusnosql.repository.OnibusRepository;

import reactor.core.publisher.Flux;
import reactor.core.publisher.Mono;

@Service
public class OnibusServiceImpl implements OnibusService{
	
	@Autowired
	private OnibusRepository onibusRepo;
	
	@Override
	public Flux<Onibus> findAll() {
		
		return onibusRepo.findAll();
		
	}
	
	@Override
	public Mono<Onibus> findById(String id) {
		
		return onibusRepo.findById(id);
		
	}
	
	@Override
	public Mono<Onibus> save(Onibus onibus) {
		
		return onibusRepo.save(onibus);
		
	}



}
