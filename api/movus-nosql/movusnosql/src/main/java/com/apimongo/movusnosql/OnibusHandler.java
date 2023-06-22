package com.apimongo.movusnosql;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.stereotype.Component;
import org.springframework.web.reactive.function.server.ServerRequest;
import org.springframework.web.reactive.function.server.ServerResponse;
import static org.springframework.web.reactive.function.server.ServerResponse.ok;
import static org.springframework.web.reactive.function.BodyInserters.fromPublisher;

import com.apimongo.movusnosql.document.Onibus;
import com.apimongo.movusnosql.service.OnibusService;

import reactor.core.publisher.Mono;

//@Component
public class OnibusHandler {
	
	@Autowired
	private OnibusService service;
	
	public Mono<ServerResponse> findAll(ServerRequest request) {		
		
		return ok()
				.contentType(MediaType.APPLICATION_JSON)
				.body(service.findAll(), Onibus.class);
	
	}
	
	public Mono<ServerResponse> findById(ServerRequest request) {		
			String id = request.pathVariable("id");
			return ServerResponse.ok()
					.contentType(MediaType.APPLICATION_JSON)
					.body(service.findById(id), Onibus.class);
	}
	
	public Mono<ServerResponse> save(ServerRequest request){
		final Mono<Onibus> playlist = request.bodyToMono(Onibus.class);
		return ServerResponse.ok()
				.contentType(MediaType.APPLICATION_JSON)
				.body(fromPublisher(playlist.flatMap(service::save), Onibus.class));
	}

}
