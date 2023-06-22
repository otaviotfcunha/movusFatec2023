//package com.apimongo.movusnosql;
//
//import java.util.UUID;
//
//import org.springframework.boot.CommandLineRunner;
//import org.springframework.stereotype.Component;
//
//import com.apimongo.movusnosql.document.Rota;
//import com.apimongo.movusnosql.repository.RotaRepository;
//
//import reactor.core.publisher.Flux;

//@Component
//public class DummyData  implements CommandLineRunner{
//	
//	private final RotaRepository rotaRepo;
//	
//    DummyData(RotaRepository rotaRepo) {
//        this.rotaRepo = rotaRepo;
//    }
//
//    @Override
//    public void run(String... args) throws Exception {
//
//    	rotaRepo.deleteAll()
//                .thenMany(
//                        Flux.just("564","589","654","899","222")
//                                .map(latitude -> new Rota(UUID.randomUUID().toString(), latitude, latitude))
//                                .flatMap(rotaRepo::save))
//                .subscribe(System.out::println);
//    }
//}