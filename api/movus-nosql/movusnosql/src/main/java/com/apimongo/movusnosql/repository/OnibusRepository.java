package com.apimongo.movusnosql.repository;

import org.springframework.data.mongodb.repository.ReactiveMongoRepository;

import com.apimongo.movusnosql.document.Onibus;

public interface OnibusRepository extends ReactiveMongoRepository<Onibus, String> {

}
