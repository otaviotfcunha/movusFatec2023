package com.apimongo.movusnosql.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import com.apimongo.movusnosql.document.Rota;
import com.apimongo.movusnosql.service.RotaService;

import reactor.core.publisher.Flux;
import reactor.core.publisher.Mono;

@RestController
public class RotaController {
	
	@Autowired
	RotaService rotaService;
	
	@GetMapping(value = "/rotas")
	public Flux<Rota> getRotas() {
		
		return rotaService.findAll();
		
	}
	
	@GetMapping(value = "/rotas/{id}")
	public Mono<Rota> getRotaId(@PathVariable String id) {
		
		return rotaService.findById(id);
		
	}
	
	@PostMapping(value = "/rotas")
	public Mono<Rota> saveRota (@RequestBody Rota rota) {
		return rotaService.save(rota);
		
	}

}
