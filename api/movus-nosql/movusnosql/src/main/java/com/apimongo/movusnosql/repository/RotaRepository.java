package com.apimongo.movusnosql.repository;

import org.springframework.data.mongodb.repository.ReactiveMongoRepository;

import com.apimongo.movusnosql.document.Rota;

public interface RotaRepository extends ReactiveMongoRepository<Rota,String> {

}
